<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FORM INPUT</title>
    <!-- CSS only -->
    <!-- link berfungsi untuk mengimport library dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>
<style>
.warning {
    color: #ff0000;
}
</style>

<body>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-success mt-4">
                <div class="card-header text-center bg-light">FORMULIR GUESTBOOK</div>
                <div class="card-body">
                    <!-- pembuatan form yang digunakan untuk memasukkan data -->
                    <form action="inputact.php" method="POST">
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
                                    placeholder="Name" value="" /> <span class="warning"></span></div>
                        </div>

                        <!-- === EMAIL -->
                        <div class="form-group row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9"><input required type="text" name="email" class="form-control"
                                    id="email" placeholder="Email" value="" /> <span class="warning"></span></div>
                        </div>

                        <!-- === ADDRESS -->
                        <div class="form-group row mb-3">
                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9"><input required type="text" name="address" class="form-control"
                                    id="address" placeholder="Address" value="" /> <span class="warning"></span></div>
                        </div>

                        <!-- === CITY -->
                        <div class="form-group row mb-3">
                            <label for="city" class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9"><input required type="text" name="city" class="form-control" id="city"
                                    placeholder="city" value="" /> <span class="warning"></span></div>
                        </div>
                        <!-- === MESSAGE -->
                        <div class="form-group row mb-3">
                            <label for="message" class="col-sm-3 col-form-label">Message</label>
                            <div class="col-sm-9"><input required type="text" name="message" class="form-control"
                                    id="message" placeholder="Message" value="" /> <span class="warning"></span></div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-9">
                                <!-- tombol submit untuk melakukan perintah selanjutnya yaitu dialihkan
                                ke file php untuk memasukkan data ke dalam database -->
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>