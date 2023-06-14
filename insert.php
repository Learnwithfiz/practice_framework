<?php
 require './db.php';


    $name = $_POST['name'];
    $email = $_POST['email'];
    $dept = $_POST['dept'];
    $dropd = $_POST['dropd'];
    $ins = "INSERT INTO student(name,email,dept,dropd)
    VALUES('$name','$email','$dept','$dropd')";
    $ex = mysqli_query($con,$ins);
    if($ex){
        echo "data send success";
    }else{
        echo "failed,,,";
    }
 
?>