<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/Users/nav_Users.php'; ?>

<h1>Drop down example</h1>

<form action="" method='post'>

    <div class='form-group'>
        <label for="name">Name Drop Down</label>
        <select name="name" id="">
            <?php
            foreach ($data['users_key'] as $user) {
            ?>
                <option value="<?php echo $user->email; ?>">
                    ID: <?php echo $user->id; ?> <br />
                    Name: <?php echo $user->name; ?>
                    Email: <?php echo $user->email; ?>
                    Phone: <?php echo $user->phone; ?>
                </option>

            <?php
            }
            ?>
        </select>
    </div>

    <button type="submit" name="create" class="btn btn-primary mt-2"> Register</button>



</form>
<?php require APPROOT . '/views/includes/footer.php'; ?>