<?php

include "other/dbcon.php";

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql="INSERT INTO `contacus` (`SL`, `name`, `email`, `subject`, `message`, `datatimeport`) VALUES (NULL, '$name', '$email', '$subject', '$message', current_timestamp());";


    $res1=mysqli_query($conn,$sql);

    // header("location: index.php")
}

?>