<?php
    include "connect.php";

    $query = "CREATE TABLE guestbook 
            (id int(5) auto_increment primary key not null,
            posted date,
            name varchar(50),
            email varchar(75),
            address varchar(75),
            city varchar(75),
            message longblob
            )";
    
    if (mysqli_query($conn,$query)) {
        echo "Table created";
    }else{
    echo "error creating Table: " . mysqli_connection_error($conn);
    
    }
?>