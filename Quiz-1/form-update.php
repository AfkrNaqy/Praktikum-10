<!DOCTYPE html>
<html>

<head>
    <title>Update Guestbook</title>
    <!-- link berfungsi untuk mengimport library dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>
<style>
p {
    width: 350px;
}

thead {
    background-color: #cccddd;
}
</style>

<body>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-success mt-4">
                <div class="card-header text-center bg-light">FORMULIR GUESTBOOK</div>
                <div class="card-body">
                    <!-- pembuatan form yang digunakan untuk memasukkan data -->
                    <form action="updateAct.php" method="POST">
                        <!-- untuk looping data yang ingin diupdate -->
                        <?php
                            $id = $_GET['id'];
                            include "connect.php";        
                            // untuk mengambil data dari database dengan menggunakan id
                            // dari form/tabel guestbook
                            $query = mysqli_query($conn, "SELECT * 
                            FROM guestbook
                            WHERE id=$id");
                            // melakukan looping untuk mengambil data dari setiap kolomg yang telah diambil
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <!-- === POSTED === -->
                        <div class="form-group row mb-3">
                            <label for="posted" class="col-sm-3 col-form-label">Posted</label>
                            <div class="col-sm-9"><input required type="date" name="posted" class="form-control"
                                    id="posted" placeholder="Posted" value="" /> <span class="warning"></span></div>
                        </div>

                        <!-- === NAME === -->
                        <div class="form-group row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9"><input required type="text" name="name" class="form-control" id="name"
                                    placeholder="Name" value="<?php echo $data['name']; ?>" /> <span
                                    class="warning"></span></div>
                        </div>

                        <!-- === EMAIL -->
                        <div class="form-group row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9"><input required type="text" name="email" class="form-control"
                                    id="email" placeholder="Email" value="<?php echo $data['email']; ?>" /> <span
                                    class="warning"></span></div>
                        </div>

                        <!-- === ADDRESS -->
                        <div class="form-group row mb-3">
                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9"><input required type="text" name="address" class="form-control"
                                    id="address" placeholder="Address" value="<?php echo $data['address']; ?>" /> <span
                                    class="warning"></span></div>
                        </div>

                        <!-- === CITY -->
                        <div class="form-group row mb-3">
                            <label for="city" class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9"><input required type="text" name="city" class="form-control" id="city"
                                    placeholder="city" value="<?php echo $data['city']; ?>" /> <span
                                    class="warning"></span></div>
                        </div>
                        <!-- === MESSAGE -->
                        <div class="form-group row mb-3">
                            <label for="message" class="col-sm-3 col-form-label">Message</label>
                            <div class="col-sm-9"><input required type="text" name="message" class="form-control"
                                    id="message" placeholder="Message" value="<?php echo $data['message']; ?>" /> <span
                                    class="warning"></span></div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-9">
                                <!-- tombol submit untuk melakukan perintah selanjutnya yaitu dialihkan
                                ke file php untuk memasukkan data ke dalam database -->
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>