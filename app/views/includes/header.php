<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- bootstrap ---------------------------------------------------------------------------------------------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- ------------------------------------------------------------------------------------------------------- -->

  <title><?php echo SITENAME ?></title>

<style>
  
  .navbar-custom {
    background-color: lightgreen;
}

</style>



</head>

<body>

<!-- <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  



</nav> -->



  <nav class="navbar navbar-expand-lg navbar navbar-inverse">

    <!-- <nav class="navbar navbar-inverse"> -->
      <div class="container-fluid">
     <div class="navbar-header">
      <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> -->
      
      <a class="navbar-brand" href="/mvc/Home">REAL ESTATE PROJECT</a>
      </div>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <li><a href="/mvc/Home"><?php echo _("Home"); ?></a></li>
        <li><a href="/mvc/Resources"><?php echo _("Resources"); ?></a></li>
        <li><a href="/mvc/About"><?php echo _("About"); ?></a></li>
        <li><a href="/mvc/Contact"><?php echo _("Contact us"); ?></a></li>
        </ul>
      
    

          <!-- also included in the nav bar -->
          <!-- this is the login and sign up part here we combine php with with html and its not using alternative systanx which is recommended -->
    
          <ul class="nav navbar-nav">

          <!-- using alternative syntax to mix html and php-->
         
            <?php $membershipProvider = new MembershipProvider();?>

            
            <?php if($membershipProvider->loggedIn()):?>
               <!-- show the logout -->
              <li>
                <a href="/mvc/login/logout"><?php echo _("Logout"); ?></a>
              </li>

              <?php else: ?>
                <!-- show the login and register -->
                <li>
                  <a href="/mvc/Login/login"><?php echo _("Login"); ?></a>
                </li>

                <li>
                  <a href="/mvc/Register/createuser"><?php echo _("Sign up"); ?></a>
                </li>

            <?php endif; ?>

         </ul>
     



      </div>

    <div>
    <!-- localization selector -->
    <label for="languages" style="color:white" >Language:</label>
 

	  <select name="languages" id="languages" onchange="switchlanguage(this)">
  
    <option value="en"
    <?php if(!empty($_GET['lang'])){
     echo $_GET['lang'] == 'en' ? 'selected="selected"' : ''; 
    }
    ?>
    >En</option>

    <option value="fr_CA"
    <?php if(!empty($_GET['lang'])){
      echo $_GET['lang'] == 'fr_CA' ? 'selected="selected"' : ''; 
   }
   ?>
    >Fr</option>

  
	  </select>
	  </br>
    <script >
	
	  //This is set to be called in the HTML drop down: onchange="switchlanguage(this)"
  	function switchlanguage(dropdown) {

		// location.pathname evaluates to: /localization/languageselection.php
		 document.location = location.pathname+'?lang='+dropdown.options[dropdown.selectedIndex].value;

	  }

    </script>

    </div>
 


  </nav>


</body>

</html>


  




