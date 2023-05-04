<?php
$nidn = $_GET['nidn'];
include "koneksi.php";

$qry = "SELECT * FROM dosen WHERE nidn = '$nidn'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

?>

<?php
$nidn = $_GET['nidn'];
include "koneksi.php";

$qry = "SELECT * FROM dosen WHERE nidn = '$nidn'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Dosen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!--CSS-->
  <link rel="stylesheet" href="style.css" />
  <!--font awesome-->
  <script src="https://kit.fontawesome.com/4654690b34.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container vh-100 flex align-items-center justify-content-center">
    <form action="updatedosen.php" method="POST" class="container" id="needs-validation" novalidate>
      <!--input email-->
      <div class="form-group mb-4">
        <label for="exampleInputEmail1">Email address</label>
        <input value="<?= $data['email'] ?>" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
      </div>
      <!--input nidn-->
      <div class="form-group mb-4">
        <label for="exampleInputPassword1">NIDN</label>
        <input value="<?= $data['nidn'] ?>" readonly name="nidn" type="number" class="form-control" name="email" required />
      </div>
      <!--input nama-->
      <div class="form-group mb-4">
        <label for="exampleInputPassword1">Nama Lengkap</label>
        <input value="<?= $data['nama'] ?>" name="nama" type="text" class="form-control" id="exampleInputPassword1" />
      </div>
      <div class="row">
        <!--input matkul yg diajar-->
        <div class="col-md-6 mb-3">
          <label for="exampleInputPassword1">Matkul yang diajar</label>
          <input value="<?= $data['matakuliah'] ?>" name="matakuliah" type="text" class="form-control" id="exampleInputPassword1" />
        </div>
        <!--input gender-->
        <div class="col-md-6 mb-3">

          <label for="validationCustom05">Jenis Kelamin</label>
          <div class="form-check">
            <?php
            if ($data['gender'] == 1) {
            ?>
              <input type="radio" name="gender" value="1" checked> Laki-laki
              <input type="radio" name="gender" value="2"> Perempuan
            <?php } else { ?>
              <input type="radio" name="gender" value="1"> Laki-laki
              <input type="radio" name="gender" value="2" checked> Perempuan
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="row">
        <!--input alamat-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Alamat</label>
          <input value="<?= $data['alamat'] ?>" name="alamat" type="text" class="form-control" id="validationCustom01" required />
        </div>
        <!--input nohp-->
        <div class="col-md-6 mb-3">
          <label for="exampleInputPassword1">No HP</label>
          <input value="<?= $data['noHp'] ?>" name="noHp" type="text" class="form-control" id="exampleInputPassword1" />
        </div>
      </div>
      <div class="row">
        <!--button-->
        <div class="row container justify-content-center">
          <!--button-->
          <button input type="submit" value="simpan" class="btn btn-block mt-2 bg-primary btn-dark" role="button" style="width: 50%">
            Simpan
          </button>
        </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>