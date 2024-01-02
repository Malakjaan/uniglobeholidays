<?php
require_once('../../config/connection.php');
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $comment = $_POST['comment'] ;
    $rating= $_POST['rating'] ;
    $status = $_POST['status'] ;
    $query = "INSERT INTO tbl_feedback(name, email, comment, rating,status) 
    VALUES('$name', '$email', '$comment', '$rating','$status')";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }

?>