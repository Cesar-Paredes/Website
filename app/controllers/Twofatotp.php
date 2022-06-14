<?php

require_once dirname(dirname(__DIR__)).'/vendor/totp/rfc6238.php';

    class TwoFATOTP extends Controller{
        public function __construct(){
          $this->usersModel = $this->model('usersModel');
        }
        public function index(){
            
            $this->view('Login/twofatotp');

        }

        public function verifyTOTP($param = null){

            $membershipProvider = new MembershipProvider();

            $membershipProvider->startSession();

            if(!$_SESSION['twofaerror'])
                $this->view('Login/twofatotp');

            if(isset($_SESSION['username'])){
     	        if($_SERVER['REQUEST_METHOD'] == 'POST'){
			        if(isset($_POST['totpcode'])){
				        if(!empty($_POST['totpcode'])){               
                            $user_value = $this->usersModel->getUserbyName($_SESSION['username']);

                            $tokens = TokenAuth6238::getTokenCode($user_value->secretkey);
                            
                            if(str_contains($tokens, $_POST['totpcode'])){
                                
                                $_SESSION['twofauser'] = true;

                                unset($_SESSION['twofaerror']);

                                if(!empty($param))
                                    header("Location:  ".URLROOT."/".$param);
                                else
                                    header("Location:  ".URLROOT."/home");

                            }else{
                                $data = [
                                    'msg' => "Invalide code."
                                ]; 

                                $_SESSION['twofaerror'] = true;

                                // Tell the user that the code is invalid
                                $this->view('Login/twofatotp', $data);                
                            }
                    }
                        }
                }

            }else{
		        session_write_close();
		        header("Location: /mvc/login?redirect=about");
            }            

        }

    }
?>