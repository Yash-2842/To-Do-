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
     <h1 style="text-align:center">To-do's List</h1><br>
    <div style="margin:auto 20%">
        <form action="data.php" method="post" >
            <label for="title" class="form-label" style="text-align:left"><b>Task Name</b></label>
            <input type="text" class="form-control w-50" id="title" name="title" placeholder="Enter task name to add"><br>
            <input type="submit" class="btn btn-success" value="Add to list">

            <hr class="bg-dark w-20 ">
        </form>
    </div> 
     <div style="margin:auto 20%">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                    <th scope="col">Time</th>
                    <th scope="col">Complete</th>
                </tr>
            </thead>
             <tbody> 
                <?php
                    include 'database.php';
                    $sql = "select * from task";
                    $result = mysqli_query($conn,$sql);
                    if($result)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $id = $row['Sno'];
                            $title = $row['title'];
                            $time = $row['Time'];
                            $done = $row['Done'];
                ?>
                           <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $title ?></td>
                                
                                <td> <a href="edit.php?id=<?php echo $id ?>" class="btn btn-success " role="button"> Edit</a>
                                <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger " role="button">Delete</a> </td>
                               <td><?php echo $time ?></td> 
                              <?php
                              if($done==1){ ?> 
                         <td> <a href="done.php?id=<?php echo $id ?>" class="btn btn-success" role="button">Complete</a></td>
                                <?php }else{
                                    ?>
                                  <td><a href="done.php?id=<?php echo $id ?>" class="btn btn-danger" role="button">InComplete</a></td>
                                    <?php }?>
                            </tr>
                   <?php     }
                    } ?>    
            </tbody>
        </table>
    </div> 


    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
    
</body>
</html>