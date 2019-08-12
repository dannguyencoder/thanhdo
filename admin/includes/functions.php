<?php

function confirmQuery($query_result)
{
    global $connection;
    if ($query_result) {
//        echo "Query success";
        return true;
    } else {
        die("Query failed " . mysqli_error($connection));
    }
}

function redirect($location){

    header("Location: {$location}");
    exit;
}


?>