<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guestbook</title>
    <!-- link berfungsi untuk mengimport library dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>

<body>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>ID</td>
                <td>Posted</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
                <td>City</td>
                <td>Message</td>
                <td>Update||Delete</td>
            </tr>
        </thead>
        <?php
        include "connect.php";
        // query untuk mengambil data dari tabel
        $query = mysqli_query($conn, 'SELECT * FROM guestbook');
        // melakukan looping untuk mengambil data dari setiap kolom tabel
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['posted'] ?></td>
            <td><?php echo $data['name'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['address'] ?></td>
            <td><?php echo $data['city'] ?></td>
            <td><?php echo $data['message'] ?></td>
            <!-- tombol update untuk mengubah data dari tabel yang akan diarahkan ke
            file form-update.php -->
            <td class="update"><a class="btn btn-primary"
                    href="form-update.php?id=<?php echo $data['id']; ?>">Update</a>
                <!-- tombol hapus untuk menghapus dan akan dieksekusi pada file
                    deleteAct.php -->
                <a class="btn btn-danger" href="deleteAct.php?id=<?php echo $data['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php 
        }
        ?>
    </table>
    <!-- tombol untuk kembali ke halaman beranda selamat datang -->
    <a class="btn btn-warning" href="beranda_page.php">Back</a>
    <!-- untuk melakukan logout dan kembali ke halaman login -->
    <a class="btn btn-warning" href="logoutAct.php">Logout</a>
</body>

</html>