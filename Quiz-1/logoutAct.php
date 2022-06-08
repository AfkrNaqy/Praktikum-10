<?php
    // memulai session
    session_start();

    // berfungsi untuk menghentikan semua registrasi
    session_destroy();

    header("location:form-login.php");
?>