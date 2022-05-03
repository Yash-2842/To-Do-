<?php
    include 'database.php';
    $title= $_POST["title"];
    $time ="Listed at ".strval(date("F j, Y, g:i a"));
    $sql = "insert into task(title,Time) values('$title','$time')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header("location: ./index.php");
    }
    else{
        echo "can not insert";
    }
?>