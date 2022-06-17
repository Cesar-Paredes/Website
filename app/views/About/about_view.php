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
        background-image: url("../mvc/public/img/house2.jpg");
        height: 50vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

  
    </style>


<div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mb-3"><?php echo _("We offer free resources for the real estate investor"); ?></h1>
            
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
              <img src="../mvc/public/img/group.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong><?php echo _("Register for free to access our resources"); ?></strong></h4>
            <p class="text-muted">
            <?php echo _("We are a non profit organization helping real estate investors with countless resources to help them thrive in the real estate market. From good property deals to calculators that will help the investor manage his portfolio and take important decisions. "); ?>
            </p>
            <p><strong><?php echo _("Invest and watch your money grow"); ?></strong></p>
            <p class="text-muted">
            <?php echo _("Invest the right way with the right knowledge and find the best deals the market can offer."); ?>
            </p>
          </div>
        </div>
      </section>
     

  </main>
  <!--------------------------------------------------------------------------------->


  </header>


</html>




<?php require APPROOT . '/views/includes/footer.php'; ?>