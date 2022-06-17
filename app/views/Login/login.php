
 <div>
    <?php require APPROOT . '/views/includes/header.php'; ?>
  </div>

  <header>
    <style>
      .gradient-custom {
      /* fallback for old browsers */
      background: #6a11cb;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }

    .card-body{
      height: 700px;
      
    }


    /* new */
   
      #intro {
        background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }
     

  
    </style>
  </header>  



    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              


              <!-- form -->

              <form method="post" action="" class="bg-white  rounded-5 shadow-5-strong p-5">

                <!-- username input -->
                <div class="form-outline mb-4">
                  <input name="username" type="text" id="form1Example1" class="form-control" />
                  <label class="form-label" for="form1Example1"><?php echo _("Username"); ?></label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input name="password" type="password" id="form1Example2" class="form-control" />
                  <label class="form-label" for="form1Example2"><?php echo _("Password"); ?></label>
                </div>

                <div class="form-floating">
                <span>
                  <?php 
                      if($data != []){
                        echo $data['msg'];
                  }
                  ?>
                </span>
              </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <p class="mb-0"><?php echo _("Don't have an account?"); ?> <a href="/mvc/Register/createuser" class="text-black-50 fw-bold"><?php echo _("Sign up"); ?></a>
                    </p>
                  </div>
                </div>

                 

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block"><?php echo _("Login"); ?></button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->










<!-- 
  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase"><?php echo _("Login"); ?></h2>
              <p class="text-white-50 mb-5"><?php echo _("Please enter your username and password!"); ?></p>



              <form method="post" action="">

              <div class="form-outline form-white mb-4">
                <input type="text" name="username" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX"><?php echo _("Username"); ?></label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX"><?php echo _("Password"); ?></label>
              </div>

              <div class="form-floating">
                <span>
                  <?php 
                      if($data != []){
                        echo $data['msg'];
                  }
                  ?>
                </span>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit"><?php echo _("Login"); ?></button>

              

              </form>

            </div>

            <div>
              <p class="mb-0"><?php echo _("Don't have an account?"); ?> <a href="/mvc/Register/createuser" class="text-white-50 fw-bold"><?php echo _("Sign up"); ?></a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->











</main>



<?php require APPROOT . '/views/includes/footer.php'; ?>