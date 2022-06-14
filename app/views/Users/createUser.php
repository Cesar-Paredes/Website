<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/Users/nav_Users.php'; ?>
<h1>Create a new user</h1>

<form action="" method='post' id="createUser" enctype='multipart/form-data'>

<div class='form-group'>
         <label for="username">Username</label>
         <input type="text" name="username" class="form-control" id="username" placeholder="Name" required>
        </div>

        <div class='form-group'>
         <label for="firstname">First Name</label>
         <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Name" required>
        </div>

        <div class='form-group'>
         <label for="firstname">Last Name</label>
         <input type="text" name="lastname" class="form-control" id="lastname" placeholder="lastname" required>
        </div>

        <div class='form-group'>
          <label for="password">Password</label>
         <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
         </div>

        <div class='form-group'>
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>

        <div class='form-group'>
          <label for="phone">Phone</label>
          <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone">
        </div>

    <button type="submit" name="create" class="btn btn-primary mt-2"> Register</button>

</form>
<?php require APPROOT . '/views/includes/footer.php'; ?>