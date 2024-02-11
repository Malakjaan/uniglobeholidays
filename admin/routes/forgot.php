<?php

    // Code for login
    session_start();
    require_once('../../config/connection.php');
    $email = $_POST['email'];
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";
    $str_shuffle = str_shuffle($str);
    $password = substr($str_shuffle, 6);
    $new_pass = md5($password);
    $to      = $email;
    $subject = "Password Recovery Mail";
    $message = 
    "As you have requested for password reset. We are sending you a new password so please keep that in the safe location. Your new password is  $password";

    $headers = "From: faisalbhat0770@gmail.com";
    
    if(mail($to, $subject, $message, $headers)) {
        $update_pass = "UPDATE tbl_login SET pwd = '$new_pass' WHERE email = '$email'";
        $run_pass = mysqli_query($dbcon, $update_pass);
        if($run) {
            echo 200;
        } else {
            echo 201;
        }
    }




?>