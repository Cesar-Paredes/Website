<?php

    require '../vendor/autoload.php';


    //We will add our libraries here
    // require_once 'core/app.php';
    // require_once 'core/Controller.php';
    // require_once 'core/Model.php';

    //This will autoload all the classes in our core folder.
    spl_autoload_register(function($className){

        if(file_exists(__DIR__.'/core/'.$className.'.php'))
            require_once 'core/'.$className.'.php';

    });

    require_once 'config/config.php';

    require_once 'core/membershipprovider.php';


?>