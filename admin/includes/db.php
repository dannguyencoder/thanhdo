<?php

define("DB_HOST", "127.0.0.1");
define("DB_USER", "admin");
define("DB_PASSWORD", "123!@#QWEqwe");
define("DB_NAME", "thanhdo");

$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


if ($connection->connect_error) {
    die("Database connect error " . $connection->connect_error);

} else {
//    echo "Database connected successfully";
}

?>