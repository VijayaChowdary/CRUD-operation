<?php
include 'samptest.php';
$id=$_GET['updateid'];
$sql = "SELECT * FROM `crud` WHERE id = '$id'";

$result= mysqli_query($conn, $sql);
// To display data in input field
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];


  $sql = "UPDATE  `crud` SET  id=$id, name='$name', email='$email', mobile=$mobile, password='$password'
  where id=$id";
  
  $result = mysqli_query($conn, $sql);

  if($result) {
    // echo "Updated inserted successfully";
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
    <input autocomplet="off" type="text" placeholder="Enter Your Name" class="form-control" name="name" value= <?php echo "$name"?>>
  </div>
  
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input autocomplet="off" type="text" placeholder="Enter Your Email" class="form-control" name="email" value= <?php echo "$email"?>>
  </div>
  
  <div class="mb-3">
    <label class="form-label">Mobile No</label>
    <input autocomplet="off" type="text" placeholder="Enter Your mobile no" class="form-control" name="mobile" value= <?php echo "$mobile"?> >
  </div>
  
  <div class="mb-3">
    <label class="form-label"  htmlFor="password">Password</label>
    <input autocomplet="off" type="password" placeholder="Enter Your password" id="password" class="form-control" name="password" value= <?php echo "$password"?> >
    <span onClick="showHidepassword()" id="eye" role="button">Show Password</span>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
<script>
  function showHidepassword() {
    var password = document.getElementById("password");
    var eye = document.getElementById("eye");
    if (password.type === "password"){
      password.type ="text";
      eye.innerHTML = "Hide Password";
    }else {
      password.type ="password";
      eye.innerHTML = "Show Password";
    }
  }
</script>
</div>
</body>
</html>