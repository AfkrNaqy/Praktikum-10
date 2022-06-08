<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <!-- link berfungsi untuk mengimport library dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <style>
    .upn {
        width: 30%;
    }
    </style>
</head>

<body>
    <?php
        session_start();
    ?>
    <div class="row justify-content-center">
        <div class="card text-center">
            <div class="card-header">
                <h4>SELAMAT DATANG</h4>
                <img src="logo_upn.png" class="card-img-top upn" alt="">
            </div>
            <div class="card-body">
                <!-- perintah php untuk mengambil nilai siapa yang melakukan login pada session -->
                <h5 class="card-title">WELCOME <?php echo $_SESSION['username']; ?></h5>
                <p class="card-text">
                    <!-- mencetak waktu ketika user melakukan login
                dengan pengaturan timezone indonesia -->
                    pada <?php
                        date_default_timezone_set("Asia/Jakarta");
                        echo "\t".date("l,m-F-Y, g:i:s a");
                        ?>
                </p>
                <!-- button untuk mengarahkan ke form-guestbook -->
                <a href="form-guestbook.php" class="btn btn-primary">Add Guestbook</a>
                <!-- button untuk mengarahkan ke tabel-guestbook -->
                <a href="tabel-guestbook.php" class="btn btn-primary">Show Guestbook</a>
                <!-- button untuk melakukan logout dan kembali ke halaman login -->
                <a href="logoutAct.php" class="btn btn-danger end-0">Logout</a>
            </div>
            <div class="card-footer text-muted">
                <?php
                    date_default_timezone_set("Asia/Jakarta");
                    echo "\t".date("l,m-F-Y, g:i:s a");
                ?>
            </div>
        </div>
    </div>

</body>

</html>