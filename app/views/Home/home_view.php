
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
      /* Carousel styling */
      #intro {
        height: 100vh;
        background-image: url("../mvc/public/img/house.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }


     
      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #introCarousel {
          margin-top: -58.59px;
        }
      }
        
      
    </style>


<div id="intro" class="bg-image shadow-2-strong">
      <div >
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mb-3" style="color: black"><?php echo _("Welcome to Real Estate Resources"); ?></h1>
            
          </div>
        </div>
      </div>
</div>


        
      </div>
      <!-- Inner -->

     
    </div>

</header>
<!-- ------------------------------------------------------------------------------ -->

<!-- we start the MAIN part ---------------------------------------------------- -->

<!--Main layout-->
<main class="mt-5">
    <div class="container">
      
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong><?php echo _("Real Estate News"); ?> </strong></h4>
        

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../mvc/public/img/Bloomberg.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                <?php echo _("Most recent Real Estate News business news stories and video from BNN Bloomberg. "); ?>
                </p>
                <a href="https://www.bnnbloomberg.ca/real-estate" target="_blank" class="btn btn-primary"><?php echo _("see more..."); ?></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../mvc/public/img/yahoo.png" target="_blank" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                <?php echo _("The latest real estate news for housing prices, mortgage rates, markets, luxury properties and more at Yahoo Finance Canada. "); ?>
                </p>
                <a href="https://ca.yahoo.com/topics/canada-real-estate-news/" target="_blank" class="btn btn-primary"><?php echo _("see more..."); ?></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../mvc/public/img/globe.png" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                <?php echo _("The Globe and Mail Real Estate News."); ?>
                </p>
                <a href="https://www.theglobeandmail.com/real-estate/" target="_blank" class="btn btn-primary"><?php echo _("see more..."); ?></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      

     
      <!--Section: Content-->
    </div>
  </main>
  <!--------------------------------------------------------------------------------->




</html>




<?php require APPROOT . '/views/includes/footer.php'; ?>