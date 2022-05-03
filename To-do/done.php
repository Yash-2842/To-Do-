<?php
    include 'database.php';
    $id=$_GET['id'];
    $sql= "select Done from task where Sno = $id";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        $row=mysqli_fetch_assoc($result);
        $done=$row['Done'];
        echo $done;
        if($done==0)
        {
            $sql = "Update task set Done=1 where Sno=$id";
        }
        else{
            $sql = "Update task set Done=0 where Sno=$id";
        }
        $res= mysqli_query($conn,$sql);
        if($res)
            header("location: ./index.php");
        else
            echo "query failed";
    }
    else{
        echo "not done";
    }
?>