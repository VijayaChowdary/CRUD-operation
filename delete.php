<?php
include 'samptest.php';
if(isset($_GET['deletid'])){
    $id = $_GET['deletid'];
    // $id = mysqli_real_escape_string($conn, $id);

    $sql="DELETE FROM `crud` WHERE id = $id"; 

    $result = mysqli_query($conn, $sql);
    if($result) {
        // echo "Deleted Successfully";
        header("Location:display.php");
    }else{
        die(mysqli_error($conn));


    }
}

?>