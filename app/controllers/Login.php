<?php

class Login extends Controller{
    public function __construct(){
        $this->usersModel = $this->model('usersModel');
    }

    public function index(){
		$this->login();
		$this->view('Login/login');

    }

    public function login(){
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if(isset($_POST['username'])){
				if(!empty($_POST['username'])){
					// Does the user $_POST['username'] exist in the database!?
					if($this->userExists($_POST['username']) && $this->passwordVerify($_POST['username'], $_POST['password'])){
						if($this->userIsActive($_POST['username'])){
							session_name("user_session");
							// session_id("usersessionid");
							session_start() != FALSE or die("Could not start session");				
				
							$_SESSION['username'] = $_POST['username'];
				
							session_write_close()!= FALSE or die("Could not close the session");

							//$_SERVER['QUERY_STRING'] -> url=login&redirect=about

							$redirectPage = $this->getredirectPage();

							//$twoFAEnabled = true; // Let's assume we are reading this value from the users' table or profile
							//$twoFAIsSetup = true;

							$user = $this->usersModel->getUserbyName($_POST['username']);

							// $twoFAEnabled = $user->twofaenabled;
							// $twoFAIsSetup = $user->twofaissetup;
							if(!empty($redirectPage)){
								header("Location: ".URLROOT."/".$redirectPage);
							}
							else{
								header("Location: ".URLROOT."/Home");
							}


							
							// if($twoFAEnabled){
							// 	if($twoFAIsSetup){
							// 		header("Location:  ".URLROOT."/twofatotp/verifyTOTP/".$redirectPage); //localhost/mvc/twofatotp/verifyTOTP/about
							// 	}else{

							// 		header("Location: ".URLROOT."/Twofasetup");
							// 	}
							// }
						}//if($this->userIsActive())
						else{				
							$message = "Please make sure you confirmed your email. Click here to get a new confirmation email.";

							$data = ['msg' => $message];

							$this->view('Login/login', $data);
						}
					}else{				
						$message = "Invalid username or password.";

						$data = ['msg' => $message];

						$this->view('Login/login', $data);
					}
				}
			}
		}else {
			$this->view('Login/login');
		}

    }

	public function logout(){

		// To reset the session
	
		// 1- Empty the session array
		$_SESSION = array();

			// 2- Make the cookie expire
		setcookie("user_session", " " , time()-3600, "/");

		header("Location: home");

	}

	private function getredirectPage(){
		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		$queryStringArray = explode('=', parse_url($url, PHP_URL_QUERY));

		$result = []; 
		for($i=0; $i < (count($queryStringArray)-1); $i++) {
		   $result[$queryStringArray[$i]] = $queryStringArray[$i+1];
		}

		if(isset($result["redirect"])){
			return $result["redirect"];
		}else {
			return "";
		}

	}

    private function userExists($name)
    {
        $user_value = $this->usersModel->getUserbyName($name);
        return $user_value;
    }
    private function passwordVerify($name, $password)
    {
        $password_value = $this->usersModel->getPasswordbyName($name);
        return password_verify($password, $password_value->password);
    }
	private function userIsActive($name){

        $user_value = $this->usersModel->getUserbyName($name);
        return $user_value->active;		

	}
}

?>