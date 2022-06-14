<?php

class Contact extends Controller{
    public function __construct(){
        
    }

    public function index(){

        $membershipProvider = new MembershipProvider();

        $membershipProvider->startSession();

        $this->view('Contact/contact_view');
    }
}

?>