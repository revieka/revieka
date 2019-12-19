<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign Up</title>
    <style >
      body{ margin: auto; }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
      <img src="admin/assets/img/logo.png" width="250px" height="150px" class="mt-5">
    </div>
    <form method="post">
        <div class="col-sm-10">
  <h5 > Sign Up
    
  </h5>
<div class="form-group">
    <input type="Nama Depan" name="depan" class="form-control" id="exampleInputNamaDepan" placeholder="Nama Depan">
  </div>
  <div class="form-group">
    <input type="Nama Belakang" name="belakang" class="form-control" id="exampleInputNamaBelakang" placeholder="Nama Belakang">
  </div>
  <div class="form-group">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <input type="Nomer Handphone" name="no_hp" class="form-control" id="exampleInputNomerHanphone" placeholder="Nomer Handphone">
  </div>
  <div class="form-group">
    <input type="Universitas" name="universitas" class="form-control" id="exampleInputUniversitas" placeholder="Universitas">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" name="daftar" class="btn btn-primary">Sign Up</button>
</form></div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
$conn = mysqli_connect("localhost","root","","kostyou");
if(isset($_POST['daftar'])){

  $depan = $_POST['depan'];
  $belakang = $_POST['belakang'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $no_hp = $_POST['no_hp'];
  $universitas = $_POST['universitas'];
  $alamat = $_POST['alamat'];

  $a = $conn->query("INSERT INTO `registrasi` (`user_id`, `nama_depan`, `nama_belakang`, `email`, `password`, `nomor_handphone`, `Universitas`, `alamat`) VALUES (NULL, '$depan', '$belakang', '$email', '$password', '$no_hp', '$universitas', '$alamat')");

  echo "<script>alert('Anda Sudah Masuk')</script>";
  echo"<meta http-equiv='refresh' content='1;url=login.php'   >";
}?>