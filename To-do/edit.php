<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>To-do-list</title>
  </head>
  <body>
<?php
    include 'database.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM 'task' WHERE 'S.no'=$id";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];    
    }
?>

     <h1 style="text-align:center">To-do's List</h1><br>
    <div style="margin:auto 20%">
        <form action="editaction.php" method="post" >
            <label for="title" class="form-label" style="text-align:left"><b>Task Name</b></label>
            <input type="text" class="form-control w-50" id="title" name="title" value="<?php global $title; echo $title ?>" placeholder="Enter task name to Update"><br>
            <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
            <input type="submit" class="btn btn-success" value="Update to list">

            <hr class="bg-dark w-20 ">
        </form>
 </body>
 </html>