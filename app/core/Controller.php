<?php

class Controller{

    /*

        This is our base controller 
        It will have two functions - one to invoke the views and one to invoke the models 

    */

    public function view($name, $data=[]){
        if(file_exists('../app/views/'.$name.'.php')){
            require_once('../app/views/'.$name.'.php');
        }
        else{
            echo "View not found!";
        }
    }

    public function model($modelName){
        require_once('../app/models/'.$modelName.'.php');
        return new $modelName;
    }

}
?>