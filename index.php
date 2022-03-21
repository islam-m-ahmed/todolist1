<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todolist</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" > -->
    <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
    
    <h1 class="text-center my-4 py-4">Welcom To TodoList App</h1>
    <div class="w-50 m-auto"> 
    <form action="data.php" method="POST" autocomplete="off">

        <label for="title1"></label>
        <input type="text" name="title" placeholder="type your task" required  class="form-control">
        <button class="btn btn-primary mt-2" type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</button>
    </form>
    <hr class="bg-dark my-3">
    <table class="table table-hover table-dark	 table-responsive-sm mt-5  	 table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Task</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead> 
        <tbody>
            <?php
            include ('database.php');
            $query1 = "select * from todo"; 
            $result1 = mysqli_query($connect, $query1);
            if($result1){
                $i=1;
                while($i<=mysqli_num_rows($result1)){
                ?>
      
            <?php 
                while($row = mysqli_fetch_assoc($result1)){
                    $id =$row['id'];
                    $task = $row['task'];
                ?>
        <tr>
                <td><?php     echo $i ?></td> 
                <td><?php echo $task ?></td>
                <td>
                <a href="edit.php?id=<?php echo $id ?>"> <button class="btn btn-success "><i class="fas fa-edit    "></i></button>
                </td>
                <td>
                    <a href="delet.php?id=<?php echo $id ?>"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </td>
        </tr>
               <?php  $i++; } } } ?>
        </tbody>

    </table>
  </div>
  

</body>
</html>