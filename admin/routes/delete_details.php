<?php
    require_once('../../config/connection.php');

    if(isset($_POST['filename']) && $_POST['filename'] == 'delete_feedback') {
    $id = $_POST['feedbackId'];

    $query = "DELETE FROM  tbl_feedback WHERE id = $id";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }
    }else if($_POST["filename"]=="delete_package"){
        $id = $_POST['package_id'];

    $query = "DELETE FROM  tbl_package WHERE id = $id";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }
    } else if($_POST["filename"]=="delete_slider"){
        $id = $_POST['slider_id'];

        $query = "DELETE FROM  tbl_slider WHERE id = $id";
        $result = mysqli_query($dbcon, $query);
            if($result) {
                echo 200;
            } else {
                echo mysqli_error($dbcon);
            }
    
    }else if($_POST["filename"]=="delete_contact"){
        $id = $_POST['contact_id'];

        $query = "DELETE FROM  tbl_contact WHERE id = $id";
        $result = mysqli_query($dbcon, $query);
            if($result) {
                echo 200;
            } else {
                echo mysqli_error($dbcon);
            }
    
    }
    else if($_POST["filename"]=="delete_desc"){
        $id = $_POST['p_id'];

        $query = "DELETE FROM  tbl_package_desc WHERE id = $id";
        $result = mysqli_query($dbcon, $query);
            if($result) {
                echo 200;
            } else {
                echo mysqli_error($dbcon);
            }
    
    }
    else if($_POST["filename"]=="delete_destination"){
        $id = $_POST['destination_id'];

        $query = "DELETE FROM  tbl_destination WHERE id = $id";
        $result = mysqli_query($dbcon, $query);
            if($result) {
                echo 200;
            } else {
                echo mysqli_error($dbcon);
            }
    
    }
    else if($_POST["filename"]=="delete_gallery"){
        $id = $_POST['gallery_id'];

        $query = "DELETE FROM  tbl_gallery WHERE id = $id";
        $result = mysqli_query($dbcon, $query);
            if($result) {
                echo 200;
            } else {
                echo mysqli_error($dbcon);
            }
    
    }
    else if($_POST["filename"]=="delete_blog"){
        $id = $_POST['blog_id'];

        $query = "DELETE FROM  tbl_blog WHERE id = $id";
        $result = mysqli_query($dbcon, $query);
            if($result) {
                echo 200;
            } else {
                echo mysqli_error($dbcon);
            }
    
    }
    else if($_POST["filename"]=="delete_hotels"){
        $id = $_POST['hotel_id'];

    $query = "DELETE FROM  tbl_hotels WHERE id = $id";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }
    }


    

?>

