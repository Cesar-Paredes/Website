<?php

/*
    This is our core app file, it is responsible for the routing of our app
    Programmatic mapping of URLs to controllers and their methods 
    URL pattern - URL_ROOT/controller/method/params
*/

// echo _("Hello");
// echo _("Good morning");
// echo _("Real Estate News");


class App{

    protected $currentController = 'Home'; //this means that whenever you use this framework, you must first define the Home Controller
    protected $currentMethod = 'index'; //This means that all the controllers should have atleast an index() method 
    protected $params = [];    

    public function __construct(){
        $url = $this->parseURL(); 

        if(file_exists('../app/controllers/'.$url[0].'.php')){ 
            $this->currentController = $url[0]; 
            unset($url[0]);
        }

        //Require the controller class 
        require_once '../app/controllers/'. $this->currentController.'.php';
        //Instantiate the currentController class
        $this->currentController = new $this->currentController; // Home = new Home
         //Creating a new instance of the currentController
        
        //check if the $url[1] is set in the url or not 
        if(isset($url[1])){
            //check to see if such method exists in the currentController
            if(method_exists($this->currentController,$url[1])){
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        //Get the params from the url if any 
        $this->params = $url ? array_values($url) : [];

        //executing the currentMethod in our currentController with an array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

    }

    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL); 
            $url = explode('/',$url);
            return $url;
        }
    }
}
?>