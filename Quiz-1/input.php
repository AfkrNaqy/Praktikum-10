<?php
    include "connect.php";

    //memindahkan nilai data form ke variabel sederhana agar mudah ditulis
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $homepage=$_POST['homepage'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    // perintah untuk memasukkan kedalam database
    $sql ="INSERT INTO user SET name='$name',
    address='$address',
    email='$email',
    homepage='$homepage',
    username='$username',
    password='$password'";

    // melakukan perintah sekaligus mengecek apakah data berhasil dieksekusi
    // dan masuk ke dalam database atau tidak
    mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
    header("location:form-login.php");
?>