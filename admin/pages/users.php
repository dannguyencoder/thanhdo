<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users</h1>
    <p class="mb-4">User Management</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View All Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>

                    <?php

                    $select_all_users = "SELECT users.id, users.username, users.password, users.user_role, 
users.email, roles.role_name 
FROM users INNER JOIN roles on users.user_role = roles.id";
                    $select_all_users_query = mysqli_query($connection, $select_all_users);

                    while ($user = mysqli_fetch_assoc($select_all_users_query)):

                    ?>

                    <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['password'] ?></td>
                        <td><?php echo $user['role_name'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="index.php?page=edit_user&id=<?php echo $user['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="index.php?page=delete_user&id=<?php echo $user['id']; ?>">Delete</a>

                        </td>
                    </tr>

                    <?php endwhile; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

