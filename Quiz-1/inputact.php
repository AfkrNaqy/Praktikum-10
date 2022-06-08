<?php
    // perintsh untuk melakukan koneksi ke mysql
    include 'connect.php';
    // deklarasi variabel yang digunakan untuk menyimpan nilai dari 
    // hasil input form
    $id = $_POST['id'];
    $posted = $_POST['posted'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address  = $_POST['address'];
    $city  = $_POST['city'];
    $message  = $_POST['message'];

    // perintah untuk memasukkan kedalam tabel dari nilai form yang telah disimpan
    mysqli_query($conn, "INSERT INTO guestbook VALUES('$id','$posted','$name','$email','$address','$city','$message')");
    header("location:tabel-guestbook.php");
?>