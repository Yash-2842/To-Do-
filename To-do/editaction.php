<?php
    include 'database.php';
    $title = $_POST['title'];
    $id = $_POST['id'];
    $time = "Edited at ".strval(date("F j, Y, g:i a"));
    echo $id;
    $sql= "UPDATE task SET title='$title',Time='$time' WHERE Sno=$id";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header("location: ./index.php");
    }
    else{
        echo 'can not edit';
    }
?>