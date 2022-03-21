<?php 

        $title = $_POST['title'];

        include ('database.php');

        $query ="insert into todo(task) values('$title')";
        $result = mysqli_query($connect, $query);

        if($result){
            header("location: ./index.php");
        }

?>
