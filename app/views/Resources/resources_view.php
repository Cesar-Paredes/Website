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
            <h4><strong>Welcome to our free resources!</strong></h4>
            <p class="text-muted">
              We are a non profit organization helping real estate investors with countless resources to help them thrive in the real estate market. From good property deals to calculators that will help the investor manage his portfolio and take important decisions.
            </p>
            <p><strong>Do you have what it takes to invest in Real Estate?</strong></p>
            <p class="text-muted">
              Below you will find a list of free resources that you can see.
            </p>
          </div>
        </div>
      </section>


















<div class="container my-4">

<!-- <p class="font-weight-bold">Bootstrap image grid is a simple construction which allows you to create a responsive
  layout for your images.</p> -->

<!-- <p><strong>Detailed documentation and more examples of Bootstrap grid you can find in our <a href="https://mdbootstrap.com/docs/standard/layout/grid/"
      target="_blank">Bootstrap Grid Usage Docs</a>

<p><Strong>Note: </Strong>In the example below animations and shadows are only an additional option. They are added via JavaScript and they are <strong>not</strong> necessary to make a grid working.</p>

<hr class="mt-5">

<p>Built with <a target="_blank" href="https://mdbootstrap.com/docs/standard/">Material Design for Bootstrap</a> - free and powerful Bootstrap UI KIT</p> -->
<!-- 
<a class="btn btn-primary me-2" href="https://mdbootstrap.com/docs/standard/getting-started/installation/" target="_blank" role="button">Download MDB UI KIT <i class="fas fa-download"></i></a>
<a class="btn btn-danger me-2" target="_blank" href="https://mdbootstrap.com/docs/standard/" role="button">Learn more</a>
<a class="btn btn-success me-2" target="_blank" href="https://mdbootstrap.com/docs/standard/getting-started/" role="button">Tutorials</a>
<a class="btn btn-dark me-2" target="_blank" href="https://github.com/mdbootstrap/mdb-ui-kit" role="button">GitHub <i class="fab fa-github ms-2"></i></a> -->

<hr class="mb-5"/>
<!--Grid row-->
<div class="row">

  <!--Grid column-->
  <div class="col-lg-4 col-md-12 mb-4">

    <a href="https://duproprio.com/en/" target="_blank">
    <img src="../mvc/public/img/dupropio.jpg" class="img-fluid mb-4" alt="">
    </a>  

    <a href="https://www.ratehub.ca/mortgage-refinance-calculator" target="_blank">    
    <img src="../mvc/public/img/mortgageRefCalculator.jpg" class="img-fluid mb-4" alt=""
      data-wow-delay="0.3s">
    </a>



  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-4 col-md-6 mb-4">

    <a href="https://www.ratehub.ca/mortgage-payment-calculator" target="_blank">    
    <img src="../mvc/public/img/mortgagePayment.jpg" class="img-fluid mb-4" alt=""
      data-wow-delay="0.1s">
    </a> 

    <a href="https://wowa.ca/calculators/rental-property-calculator#netincome" target="_blank">
    <img src="../mvc/public/img/rental.jpg" class="img-fluid mb-4" alt=""
      data-wow-delay="0.4s">
    </a>


  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-4 col-md-6 mb-4">

    <a href="https://wowa.ca/calculators/capital-gain-tax" target="_blank">
    <img src="../mvc/public/img/tax.jpg" class="img-fluid mb-4" alt=""
      data-wow-delay="0.2s">
    </a>

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