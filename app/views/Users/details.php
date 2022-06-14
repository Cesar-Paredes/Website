<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/Users/nav_Users.php'; ?>
<?php $user = $data['user_key']; ?>
<h1>Details for: <?php echo $user->name; ?></h1>



<table class="table table-bordered">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
    </tr>

    <?php

    echo "<tr>";
    echo "<td>$user->id</td>";
    echo "<td>$user->name</td>";
    echo "<td>$user->email</td>";
    echo "<td>$user->phone</td>";
    echo "</tr>";

    ?>
</table>

<?php require APPROOT . '/views/includes/footer.php'; ?>