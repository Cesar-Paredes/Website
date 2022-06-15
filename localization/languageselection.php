<html>
<head>
</head>
<body>

	<label for="languages"  >Language:</label>
	<select name="languages" id="languages" onchange="switchlanguage(this)">
	  <option value="en" <?php echo $_GET['lang'] == 'en' ? 'selected="selected"' : ''; ?> >en</option>
	  <option value="fr_CA" <?php echo $_GET['lang'] == 'fr_CA' ? 'selected="selected"' : ''; ?> >fr_CA</option>
	</select>
	</br>
<script >
	
	//This is set to be called in the HTML drop down: onchange="switchlanguage(this)"
	function switchlanguage(dropdown) {

		// location.pathname evaluates to: /localization/languageselection.php
		 document.location = location.pathname+'?lang='+dropdown.options[dropdown.selectedIndex].value;

	}

</script>


<?php

    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';


	// Instead of just using echo// inorder for gettext to apply localization on the output we need to call it.
	//echo "Hello";

	// Set the LANGUAGE environment variable
	putenv("LANGUAGE=en");	
	setlocale(LC_ALL, 'en');

	// The domain is a custom name specific to the current web application
	// the "mo" file name must correspond to this domain
	$domain = 'mywebapp_'.$lang;
	
	textdomain($domain);

	bindtextdomain($domain, "c:\\xampp\\htdocs\\localization\\locales");

	bind_textdomain_codeset($domain, 'UTF-8');

	echo gettext('Hello'); // or simply _('Hello');
	// echo gettext('Hi');
	// Date and Time localization
	// The following code outputs the current date and time in a localized manner
	echo "</br>";
	$date = new \DateTime();
	
	$dateFormatter = new IntlDateFormatter(
		"$lang",
		IntlDateFormatter::FULL,
		IntlDateFormatter::FULL,
		'America/Los_Angeles',
		IntlDateFormatter::GREGORIAN
	);
	echo($dateFormatter->format($date));	

	echo "</br>";

	// The following code outputs a number in a localized manner
	$locale=  localeconv();
	
	echo number_format(23.5,2,
               $locale['decimal_point'],
               $locale['thousands_sep']);

?>