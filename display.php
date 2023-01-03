<?php
include 'samptest.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Crud Operation</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add User</a>
            
        </button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl Number</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * from `crud`";
    $result = mysqli_query($conn, $sql);
    if ($result){
        while($row=mysqli_fetch_assoc($result)){
            $id= $row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
            echo '
            <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
   
    <td>
    <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
    <button class="btn btn-danger"><a class="text-light" href="delete.php?deletid='.$id.'">Delete</a></button>
  </td>
  </tr>';
        }
        
        // echo $row['name'];
        // $row=mysqli_fetch_assoc($result);
        // echo $row['email'];
    }
      
    ?>
  
  </tbody>
</table>
    </div>
</body>
</html>