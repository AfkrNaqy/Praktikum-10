<?php
    // perintsh untuk melakukan koneksi ke mysql
    include 'connect.php';

    // deklarasi variabel yang digunakan untuk menyimpan nilai dari 
    // hasil input form
    $id = $_POST['id'];
    $posted = $_POST['posted'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    // query untuk melakukan update pada data dari tabel
    mysqli_query($conn, "UPDATE guestbook SET posted='$posted', name='$name',email='$email',
    address='$address', city='$city', message='$message' WHERE id = $id");
    header("location:tabel-guestbook.php");
?>