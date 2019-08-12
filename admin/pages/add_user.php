<?php

if (isset($_POST['submit_add_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user_role = $_POST['user_role'];

    $add_user_sql = "INSERT INTO users(username, password, email, user_role) 
VALUES ('{$username}', '{$password}', '{$email}', {$user_role})";
//    echo $add_user_sql . "<br>";
    $add_user_query = mysqli_query($connection, $add_user_sql);

    if ($add_user_query) {
//        echo "User added successfully";
        redirect("index.php?page=users");
    } else {
        die("Add user failed " . mysqli_error($connection));
    }


}

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add User</h1>
    <p class="mb-4">User Management</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
        </div>
        <div class="card-body">
            <form method="POST">

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="user_role">Select list:</label>
                    <select class="form-control" id="user_role" name="user_role">

                        <?php

                        $select_all_roles = "SELECT * FROM roles";
                        $select_all_roles_query = mysqli_query($connection, $select_all_roles);

                        while ($role = mysqli_fetch_assoc($select_all_roles_query)):

                            ?>

                            <option value="<?php echo $role['id']; ?>"><?php echo $role['role_name']; ?></option>

                        <?php endwhile; ?>

                    </select>
                </div>


                <button type="submit" name="submit_add_user" class="btn btn-primary">Add</button>

            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

