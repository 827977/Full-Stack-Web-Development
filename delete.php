<?php
    include('config.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE id=$id";
    //$sql1 = "DELETE FROM `student_details` WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        header("Location:details.php");
    }
    else{
        echo "Deletion failed...";
    }
?> 