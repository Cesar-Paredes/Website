<?php require APPROOT.'/views/includes/header.php'; ?>

    <h1>2FA TOTP View</h1>
    <p>This view is invoked by the TWOFATOTPController</p>
    
  <form method="post" action="">
   
    <h1 class="h3 mb-3 fw-normal">Please enter the code from the Authenticator App</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="totpcode">
      <label for="floatingInput">TOTPCode</label>
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
    <button class="w-100 btn btn-lg btn-primary" type="submit">Continue</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017�2022</p>
  </form>

<?php require APPROOT.'/views/includes/footer.php'; ?>