
 <div>
    <?php require APPROOT . '/views/includes/header.php'; ?>
  </div>

<h1>Login View</h1>
<p>This view is invoked by the LoginController</p>

<main class="form-signin w-100 m-auto">

  <form method="post" action="">
   
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password">
      <label for="floatingPassword">Password</label>
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
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>



<?php require APPROOT . '/views/includes/footer.php'; ?>