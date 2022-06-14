<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/Users/nav_Users.php'; ?>

<h1>Users View</h1>
<p>This view is invoked by the UsersController</p>



<table class="table table-bordered">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td colspan="2" class="text-center">Actions</td>
    </tr>

    <?php
    foreach ($data['users_key'] as $user) {
        echo "<tr>";
        echo "<td>$user->id</td>";
        echo "<td>$user->name</td>";
        echo "<td>$user->email</td>";
        echo "<td>$user->phone</td>";
        echo "<td> <a href='/MVC/Users/update/$user->id'> <i class='fa-solid fa-pencil'></i> </a></td>";
        echo "<td> <a href='/MVC/Users/delete/$user->id' onclick='return confirmDelete()'> <i class='fa-solid fa-user-xmark'></i> </a></td>";

        echo "</tr>";
    }
    ?>
</table>
<?php require APPROOT . '/views/includes/footer.php'; ?>