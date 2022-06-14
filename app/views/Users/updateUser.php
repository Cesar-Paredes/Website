<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/Users/nav_Users.php'; ?>
<h1>Update User: <?php echo $data['user_key']->name ?></h1>

<form action="" method='post'>

    <div class='form-group'>
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="<?php echo $data['user_key']->name ?>">
    </div>

    <div class='form-group'>
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="<?php echo $data['user_key']->email ?>">
    </div>

    <div class='form-group'>
        <label for="phone">Phone</label>
        <input type="number" name="phone" class="form-control" id="phone" value="<?php echo $data['user_key']->phone ?>">
    </div>

    <button type="submit" name="update" class="btn btn-primary mt-2"> Update</button>
    <a href="/MVC/Users/getUsers"><button type="button" name="update" class="btn btn-primary mt-2"> Cancel and go back</button></a>




</form>
<?php require APPROOT . '/views/includes/footer.php'; ?>