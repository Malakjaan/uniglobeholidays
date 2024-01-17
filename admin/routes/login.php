<?php

    // Code for login
    session_start();
    require_once('../../config/connection.php');
    $username = $_POST['usr'];
    $password = md5($_POST['pwd']);
    $remember_me = $_POST['remember_me'];
    if($remember_me == 1) {
        setcookie('username',$username, time() + 10, "/");
        setcookie('password',$_POST['pwd'], time() + 10 , "/");
    }

    $get_data = "SELECT COUNT(*) as 'CNT' FROM tbl_login
                 WHERE username = '$username' AND pwd = '$password'";
    $run_data = mysqli_query($dbcon, $get_data);
    $row_data = mysqli_fetch_assoc($run_data);
    $count = $row_data['CNT'];
    if($count > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        // header('Location: ../admin/views/index.php');
        echo 200;
    } else {
        echo 201;
    }




?>