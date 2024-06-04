<?php

include('connection.php');


if(isset($_POST['contact_btn'])){
     $username = $_POST['csname'];
     $email = $_POST['csEmail'];
     $subject = $_POST['csSubject'];
     $message = $_POST['csMessage'];


    // test query **********************************************************
    //comment this when running under deployment----------------------------

    $sql = "INSERT INTO `contact_us` (`name`, `email`, `subject`, `message`) VALUES ('$username',' $email','$subject','$message')";

    // deployed query ******************************************************
    
    




}





?>