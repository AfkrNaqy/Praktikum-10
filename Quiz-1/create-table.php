<?php
    include "connect.php";

    $query = "CREATE TABLE user 
            (id int(5) auto_increment primary key NOT NULL,
            name varchar(50),
            address varchar(50),
            email varchar(50),
            homepage varchar(50),
            username varchar(25),
            password varchar(25)
            )";
    
    if (mysqli_query($conn,$query)) {
        echo "Table created";
    }else{
    echo "error creating Table: " . mysqli_connection_error($conn);
    
    }
?>