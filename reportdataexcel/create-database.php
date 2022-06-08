<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $conn = mysqli_connect($servername,$username,$pass);
    
    $sql = "CREATE DATABASE if not exists db_siswa DEFAULT CHARACTER SET latin1 collate latin1_swedish_ci";
    $sql2 = "use db_siswa";
    mysqli_query($conn,$sql);
    mysqli_query($conn,$sql2);

    mysqli_select_db($conn,"db_siswa");
    
    $create = "CREATE TABLE tb_siswa (
                id_siswa int(11) not null,
                nama varchar(255) not null,
                kelas varchar(100) not null,
                alamat varchar(255) not null
    ) ENGINE = innoDB default charset=latin1";
    mysqli_query($conn,$create);

    // $insert = "INSERT INTO tb_siswa (id_siswa, nama, kelas, alamat) VALUES
    //             (1, 'Budi Susanto', '1MM3', 'Sedati Gede'),
    //             (2, 'Dita Anggraini', '1MM2', 'Rungkut'),
    //             (3, 'Risaka Nur Aini', '3MM1', 'Wonocolo')
    //             ";
    // mysqli_query($conn,$insert);

    $alter = "ALTER TABLE tb_siswa ADD PRIMARY KEY (id_siswa)";
    mysqli_query($conn,$alter);

    $autoIncrement = "ALTER TABLE tb_siswa MODIFY id_siswa int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4";
    mysqli_query($conn,$autoIncrement);
    mysqli_commit($conn);
?>