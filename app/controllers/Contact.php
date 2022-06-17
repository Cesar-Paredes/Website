<?php

class Contact extends Controller{
    public function __construct(){

        $this->usersModel = $this->model('usersModel');
        
    }

    public function index(){

        $membershipProvider = new MembershipProvider();

        $membershipProvider->startSession();

        $this->view('Contact/contact_view');
    }

    public function createMessage()
    {

        if (isset($_POST['sendMessage'])) {
              //data from the form will be pass to this data array

              $data = [
                'name' => $_POST['name'],
                'firstname' => $_POST['firstname'],
                'email' => $_POST['email'],
                'subject' => $_POST['subject'],
                'content' => $_POST['content'],
                
            ];
            
            //we pass the array to createUser method in the usersModel class
            $confirmationData = $this->usersModel->createMessage($data);
            if ($confirmationData['created']) {
                echo "created confirm";
                echo 'Please wait registering you on the application';

                // $this->sendConfirmationEmail();

                header("Location: ".URLROOT."/home");
            }
            else{
                $this->view('Login/register');
            }


        }

    }




}

?>