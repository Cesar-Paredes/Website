


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
  


</style>
</header>


<main class="form-signin w-100 m-auto">


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"><?php echo _("Sign up"); ?></p>

                <form class="mx-1 mx-md-4" method="post" action="" id="createUser" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="username" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c"><?php echo _("Username"); ?></label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="firstname" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c"><?php echo _("First Name"); ?></label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="lastname" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c"><?php echo _("Last Name"); ?></label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c"><?php echo _("Email"); ?></label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="phone" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c"><?php echo _("Phone"); ?></label>
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c"><?php echo _("Password"); ?></label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd"><?php echo _("Repeat password"); ?></label>
                    </div>
                  </div>

                  <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01"><?php echo _("Upload"); ?></span>
                    </div>
                   <div class="custom-file">
                   <input type="file" name="anyfile" class="custom-file-input" id="inputGroupFile01"
                   aria-describedby="inputGroupFileAddon01">
                   <label class="custom-file-label" for="inputGroupFile01"><?php echo _("Choose File"); ?></label>
                   </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                    <?php echo _("I agree all statements in"); ?> <a href="#!">Terms of service</a>
                    </label>
                  </div>
                  

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit"  name="create" class="btn btn-primary btn-lg"><?php echo _("Register"); ?></button>
                  </div>

                </form>

              </div>

              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="/mvc/public/img/welcome.jpg"
                  class="img-fluid" alt="Sample image">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</main>



<?php require APPROOT . '/views/includes/footer.php'; ?>