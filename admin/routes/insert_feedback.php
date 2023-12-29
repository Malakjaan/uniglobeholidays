<?php
require_once('../../config/connection.php');
    $Name = $_POST['Name'] ;
    $email = $_POST['email'] ;
    $comment = $_POST['comment'] ;
    $rating= $_POST['rating'] ;
    $status = $_POST['status'] ;
    $query = "INSERT INTO tbl_feedback(name, email, comment, rating,status) 
    VALUES('$Name', '$email', '$comment', '$rating','$status')";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }

?>