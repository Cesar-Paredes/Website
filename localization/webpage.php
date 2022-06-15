<?php


    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
	

	// Instead of just using echo// inorder for gettext to apply localization on the output we need to call it.
	//echo "Hello";


	// Set the LANGUAGE environment variable
	putenv("LANGUAGE=$lang");

	setlocale(LC_ALL, $lang);

	// The domain is a custom name specific to the current web application
	// the "mo" file name must correspond to this domain
	$domain = 'mywebapp_'.$lang;

	textdomain($domain);

	bindtextdomain($domain, "c:\\xampp\\htdocs\\localization\\locales");

	bind_textdomain_codeset($domain, 'UTF-8');

	echo gettext('Hello'); // or simply _('Hello');


?>