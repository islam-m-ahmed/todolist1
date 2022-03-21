<?php 
    include ('database.php');
    $edit1 = $_GET['id'];
    echo $edit1;
    $query3 = " delete from todo where id=$edit1";
    $reaalt = mysqli_query($connect,$query3);
    if($reaalt){
        header("location: ./index.php");
    }
   

?>