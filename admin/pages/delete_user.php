<?php

$user_id = $_GET['id'];

$delete_user_sql = "DELETE FROM users WHERE id = {$user_id}";
$delete_user_query = mysqli_query($connection, $delete_user_sql);

confirmQuery($delete_user_query);

redirect("index.php?page=users");

?>