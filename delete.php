<?php
    require './db.php';
   $id =  $_GET['id'];

       
    mysqli_query($con,"DELETE FROM student WHERE id='$id'");
?>