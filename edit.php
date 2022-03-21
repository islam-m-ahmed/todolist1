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
    
    <h1 class="text-center my-4 py-4">Update TodoList App</h1>
   <?php
   include ('database.php'); 
   $id = $_GET['id'];
   $sql = "select * from todo where id=$id";
   $resealt = mysqli_query($connect, $sql);
   if($resealt){
        $row =mysqli_fetch_assoc($resealt);
        $title = $row['task'];
       
   }
   ?>
    <div class="w-50 m-auto"> 
    <form action="editaction.php" method="POST" autocomplete="off">

        <label for="title"></label>
        <input value="<?php global $title; echo $title ?>" type="text" name="title" placeholder="update your task" required  class="form-control"><br>
        <input value="<?php global $id ; echo $id?>" type="hidden" name="id" id="id">
        <button class="btn btn-primary mt-2" type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i> Update</button>
    </form>
    <hr class="bg-dark my-3">
  
  </div>
  

</body>
</html>