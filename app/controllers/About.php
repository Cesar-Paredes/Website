<?php

    class About extends Controller{
        public function __construct(){
            
        }
        public function index(){

            $membershipProvider = new MembershipProvider();
    
            $membershipProvider->startSession();
    
            $this->view('About/about_view');
        }
    }
?>