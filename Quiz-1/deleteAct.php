<?php
    include "connect.php";
    
    $id = $_GET['id']; 
    
    $delete = "DELETE FROM guestbook WHERE id = $id";
    
    if (mysqli_query($conn,$delete)) {
        $sql = 'SELECT * FROM guestbook';
        $result=mysqli_query($conn,$sql);
        $rowcount=mysqli_num_rows($result);
        $reset = "ALTER TABLE guestbook auto_increment =" . "$rowcount";
        mysqli_query($conn,$reset);
        echo "<script>alert('Delete success')</script>";
    }
    header("location:tabel-guestbook.php");
?>