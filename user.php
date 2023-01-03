<?php
include 'samptest.php';

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];


  $sql = "INSERT INTO `crud` (name, email, mobile, password)
  VALUES ('$name', '$email', $mobile, '$password')";

  $result = mysqli_query($conn, $sql);

  if($result) {
    //echo "Data inserted successfully";
    header("Location:display.php");
  }
  else{
    die(mysqli_error($conn));
  }
  
  // else{
  //   die(mysqli_error($conn));
  // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container my-5">
<form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input autocomplet="off" type="text" placeholder="Enter Your Name" class="form-control" name="name"  >
  </div>
  
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input autocomplet="off" type="text" placeholder="Enter Your Email" class="form-control" name="email" >
  </div>
  
  <div class="mb-3">
    <label class="form-label">Mobile No</label>
    <input autocomplet="off" type="text" placeholder="Enter Your mobile no" class="form-control" name="mobile" >
  </div>
  
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input autocomplet="off" type="password" placeholder="Enter Your password" class="form-control" name="password" >
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</body>
</html>