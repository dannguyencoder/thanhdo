<?php

$user = null;

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $get_user_sql = "SELECT * FROM users WHERE id = {$user_id}";
    $get_user_query = mysqli_query($connection, $get_user_sql);

    confirmQuery($get_user_query);

    $user = mysqli_fetch_assoc($get_user_query);


}

if (isset($_POST['submit_edit_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user_role = $_POST['user_role'];

    $edit_user_sql = "UPDATE users SET username = '{$username}', password = '{$password}', 
email = '{$email}', user_role = '{$user_role}' WHERE id = $user_id";
    $edit_user_query = mysqli_query($connection, $edit_user_sql);

    if ($edit_user_query) {
        redirect("index.php?page=users");
    } else {
        die("Update user failed " . mysqli_error($connection));
    }



}

if (isset($_GET['delete_user'])) {
    $user_id = $_GET['id'];

    $delete_user_sql = "DELETE FROM users WHERE id = {$user_id}";
    $delete_user_query = mysqli_query($connection, $delete_user_sql);

    confirmQuery($delete_user_query);

    redirect("index.php?page=users");
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit User</h1>
    <p class="mb-4">User Management</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
        </div>
        <div class="card-body">
            <form method="POST">

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username'] ?>">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $user['password'] ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email'] ?>">
                </div>

                <div class="form-group">
                    <label for="user_role">Select list:</label>
                    <select class="form-control" id="user_role" name="user_role">

                        <?php

                        $select_all_roles = "SELECT * FROM roles";
                        $select_all_roles_query = mysqli_query($connection, $select_all_roles);

                        while ($role = mysqli_fetch_assoc($select_all_roles_query)):

                            ?>

                            <option
                                <?php if (null != $user['user_role'] && $user['user_role'] == $role['id'])
                                    echo 'selected'
                                ?>
                                    value="<?php echo $role['id']; ?>"><?php echo $role['role_name']; ?></option>

                        <?php endwhile; ?>

                    </select>
                </div>



                <button type="submit" name="submit_edit_user" class="btn btn-primary">Update</button>
                <a href="index.php?page=delete_user&id=<?php echo $user['id']; ?>" name="submit_delete_user" class="btn btn-danger">Delete</a>

            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

