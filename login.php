<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Log In</title>
    <style >
      body{ margin: auto; }

    </style>
  </head>
  <body>
    <div class="container">
      <center>
      <img src="assets/img/logo.png" width="250px" height="150px" class="mt-5">
    <form method="post">
      <div class="row">
        <div class="col-sm-4" style="margin-left: 380px;">
  <h5 > Log In
    
  </h5>
  <div class="form-group">
    <input type="email" name="email" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Log In</button>
</form></center>
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
if(isset($_POST["login"])){

  $email = $_POST['email'];
  $pass1 = $_POST['password'];
  $query =  mysqli_query($conn, "SELECT *FROM admin WHERE email= '$email'");

   
 
if( mysqli_num_rows($query) === 1)                                                           
{
  $row=$query->fetch_assoc();
  $_SESSION['admin']  = $row;
  echo"<div class='alert alert-info'>login sukses</div>";
  echo"<meta http-equiv='refresh' content='1;url=main.php'   >";
}

    
else{
  echo"<div class='alert alert-info'>login gagal</div>";
echo"<meta http-equiv='refresh' content='1;url=login.php'   >";} 
  

}?>