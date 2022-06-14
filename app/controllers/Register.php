<?php

require_once dirname(dirname(__DIR__)).'/vendor/totp/rfc6238.php';

require_once dirname(__DIR__).'/providers/MailProvider.php';

class Register extends Controller{
    public function __construct(){

      $this->usersModel = $this->model('usersModel');
        
    }

    public function index(){

        $membershipProvider = new MembershipProvider();

        $membershipProvider->startSession();

        $this->view('Login/register');
    }

    public function createUser()
    {
        if (isset($_POST['create'])) {
            $data = [
                'username' => $_POST['username'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'phone' => $_POST['phone'],
                
                // 'phone' => "",
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                // 'secretkey' => TokenAuth6238::generateRandomClue(), this is for 2FA
                // 'active' => false
            ];
            $confirmationData = $this->usersModel->createUser($data);
            if ($confirmationData['created']) {
                echo 'Please wait registering you on the application';

                $this->sendConfirmationEmail();

                header("Location: ".URLROOT."/home");
            }
        } else {
            $this->view('Login/register');
        }
    }

    private function sendConfirmationEmail(){

        $MailProvider = new MailProvider();

        $user_value = $this->usersModel->getUserbyName( $_POST['username']);

        $data = [
            'to_email' => $user_value->email,
            'totp' => $this->getTOTP($user_value->secretkey)
        ];

        $MailProvider->sendEmail($data);

    }

    private function getTOTP($secretkey){

        $tokens = explode(" # ",TokenAuth6238::getTokenCode($secretkey)); // # 509459 # 732134 # 630327 # 445615 # 613425 # 346399 # 172778

        return $tokens[1];
    }

}

?>