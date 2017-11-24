<?php
require __DIR__ . '/header.php';

$users = getUsers($pdo);
?>

<h1>
    Manage Users
    <a class="btn btn-primary" href="admin_user_create.php">
        <i class="fa fa-plus"></i> Add a user!
    </a>
</h1>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($users as $user) {
            echo '<tr>';
            echo '<th scope="row">'.$user['id'].'</th>';
            echo '<td>'.$user['email'].'</td>';
            echo '<td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="admin_user_show.php?id='.$user['id'].'" class="btn btn-primary">Show <i class="fa fa-eye"></i></a>
                        <a href="admin_user_edit.php?id='.$user['id'].'" class="btn btn-success">Edit <i class="fa fa-pencil"></i></a>
                        <a href="admin_user_remove.php?id='.$user['id'].'" class="btn btn-danger">Remove <i class="fa fa-trash"></i></a>
                    </div>
                </td>';
            echo '</tr>';
        }
    ?>

    </tbody>
</table>

<?php require __DIR__ . '/footer.php'; ?>
