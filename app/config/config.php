<?php
    //App Root
    define('APPROOT',dirname(dirname(__FILE__)));

    //URL Root
    define('URLROOT', 'http://localhost/MVC');

    //Site Name
    define('SITENAME', '420-951-VA Transactional Web Applications');

    //Database Params
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'test');

    define('EMAIL_PASSWORD','');

    // NOTE that configuration fiels are usually in XML format 
    // then you read the XML configuration values in PHP through a library that deserialize the XML into an Object:
      /*  $email->password

        <email>
            <password>xyz</password>

        </email>
        */
        $locale = isset($_GET['lang']) ? $_GET['lang'] : 'fr_CA';
        $domain = 'mywebapp_'.$locale;
        putenv("LANGUAGE=$locale");
        setlocale(LC_ALL, $locale);
        bindtextdomain($domain, "C:\\xampp\\htdocs\\MVC\\app\\locales");
        textdomain($domain);
        bind_textdomain_codeset($domain, 'UTF-8');

?>