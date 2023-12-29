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
    }elseif($_POST["filename"]=="delete_Package"){
        $id = $_POST['Package_id'];

    $query = "DELETE FROM  tbl_package WHERE id = $id";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }
    }


?>

