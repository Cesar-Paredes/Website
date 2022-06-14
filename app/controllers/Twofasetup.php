<?php

require_once dirname(dirname(__DIR__)).'/vendor/totp/rfc6238.php';

    class TwoFASetup extends Controller{
        public function __construct(){
          $this->usersModel = $this->model('usersModel');
        }
        public function index(){

            $membershipProvider = new MembershipProvider();

            $membershipProvider->startSession();

            if(isset($_SESSION['username'])){
                
                // We have four options:
                // 1- either display the secret to the user to enter it manually in the Authenticator app (that will later on generate TOTP based on this secret)
                // 2- or display a QR Code for th user that represents the secret, with someadditional info e.g., the user to which the secret belongs to
                // 3- or display both the QR Code and the secret.
                // 4- possible a link when the user clicks it it will open the app with the secret as a parameter.

                $user_value = $this->usersModel->getUserbyName($_SESSION['username']);

                echo"key: ".  $user_value->secretkey;
                echo TokenAuth6238::getTokenCode($user_value->secretkey);

                $data = [
                    'qrcode' => TokenAuth6238::getBarCodeUrl($_SESSION['username'], 'localhost',  $user_value->secretkey, 'webapp')
                ];
                
                // Generate the 
                $this->view('Login/twofasetup', $data);

            }else{
		        session_write_close();
		        header("Location: /mvc/login?redirect=about");
            }

        }
    }
?>