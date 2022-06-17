<div>
    <?php require APPROOT . '/views/includes/header.php'; ?>
  </div>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>



<!-- we start the HEADER part ---------------------------------------------------- -->

<header>
<style>
      #intro {
        background-image: url("../mvc/public/img/welcometoweb.jpg");
        height: 44vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .col-lg-4 {
        margin-bottom:585px;
      }

      

  
    </style>


<div id="intro" class="bg-image shadow-2-strong">
      <div>
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div >
            <h1 class="mb-3"></h1>
            
          </div>
        </div>
      </div>
    </div>

</header>
<!-- ------------------------------------------------------------------------------ -->

<!-- we start the MAIN part ---------------------------------------------------- -->

<!--Main layout-->
<main class="mt-5">


<div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
           
              
              
              <img src="../mvc/public/img/happy.jpg"  class="img-fluid" />

                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4" >
            <h4><strong><?php echo _("Welcome to our free resources!"); ?></strong></h4>
            <p class="text-muted">
            <?php echo _("We are a non profit organization helping real estate investors with countless resources to help them thrive in the real estate market. From good property deals to calculators that will help the investor manage his portfolio and take important decisions. "); ?>
            </p>
            <p><strong><?php echo _("Do you have what it takes to invest in Real Estate?"); ?></strong></p>
            <p class="text-muted">
            <?php echo _("Below you will find a list of free resources that you can see."); ?>
            </p>
          </div>
        </div>
      </section>







<div class="container my-4">



<hr class="mb-5"/>
<!--Grid row-->
<div class="row">

  <!--Grid column-->
  <div class="col-lg-4 col-md-12 mb-4">

  <div class="card-body">            
      <p class="card-text">
        <?php echo _("Find the best deals!"); ?>
        </p>
        <a href="https://duproprio.com/en/" target="_blank">
        <img src="../mvc/public/img/dupropio.jpg" class="img-fluid mb-4" alt="">
        </a>  
  </div>
    
  <div class="card-body">            
      <p class="card-text">
        <?php echo _("Mortgage Refinance Calculator"); ?>
        </p>
        <a href="https://www.ratehub.ca/mortgage-refinance-calculator" target="_blank">    
    <img src="../mvc/public/img/mortgageRefCalculator.jpg" class="img-fluid mb-4" alt=""
      data-wow-delay="0.3s">
    </a>
  </div>
    
    

    



  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-4 col-md-6 mb-4">

      <p class="card-text">
        <?php echo _("Mortgage Payment Calculator"); ?>
        </p>
    <a href="https://www.ratehub.ca/mortgage-payment-calculator" target="_blank">    
    <img src="../mvc/public/img/mortgagePayment.jpg" class="img-fluid mb-4" alt=""
      data-wow-delay="0.1s">
    </a> 

    <p class="card-text">
        <?php echo _("Rental Property Calculator"); ?>
        </p>
    <a href="https://wowa.ca/calculators/rental-property-calculator#netincome" target="_blank">
    <img src="../mvc/public/img/rental.jpg" class="img-fluid mb-4" alt=""
      data-wow-delay="0.4s">
    </a>


  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-4 col-md-6 mb-4">

  <p class="card-text">
        <?php echo _("Capital Gain Tax Calculator"); ?>
        </p>
    <a href="https://wowa.ca/calculators/capital-gain-tax" target="_blank">
    <img src="../mvc/public/img/tax.jpg" class="img-fluid mb-4" alt=""
      data-wow-delay="0.2s">
    </a>

    <p class="card-text">
        <?php echo _("Home Equity Line of Credit"); ?>
        </p>
    <a href="https://www.canada.ca/en/financial-consumer-agency/services/mortgages/home-equity-line-credit.html" target="_blank"> 
    <img src="../mvc/public/img/loans.jpg" class="img-fluid mb-4" alt=""
      data-wow-delay="0.5s">
    </a>
    
  </div>
  <!--Grid column-->

</div>
<!--Grid row-->


</main>
  <!--------------------------------------------------------------------------------->


  </header>


</html>




<?php require APPROOT . '/views/includes/footer.php'; ?>