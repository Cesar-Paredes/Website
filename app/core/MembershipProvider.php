<?php

class MembershipProvider {

    public function loggedIn(){

	    if(isset($_SESSION['username']))
            if(!empty($_SESSION['username']))
                return true;
        else 
            return false;

    }	

    public function startSession(){

		session_name("user_session");
				
		session_start() != FALSE or die("Could not start session");

    }

}

?>