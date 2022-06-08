<?php
    include "connect.php";

    $query = "CREATE DATABASE myweb";
    if (mysqli_query($conn,$query)) {
        echo "Database created";
    }else{
    echo "error creating Database: " . mysqli_connection_error($conn);
    
    }
     
?>