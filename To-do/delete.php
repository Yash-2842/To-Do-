<?php
    include 'database.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `task` WHERE `Sno` = $id";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header("location: ./index.php");
    }
    else{
       echo "can not deleted";
    }
?>