<?php

class Resources extends Controller{
    public function __construct(){
        
    }

    public function index(){

      $membershipProvider = new MembershipProvider();

      $membershipProvider->startSession();

      if($membershipProvider->loggedIn()){
          $this->view('Resources/resources_view');
      }else{
      session_write_close();
      header("Location: /mvc/login?redirect=Resources");
      }

  }

}

?>