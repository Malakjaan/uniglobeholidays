<?php
require_once('../../config/connection.php');

if(isset($_POST['filename']) && $_POST['filename'] == 'edit_feedback') {
    $id = $_POST['feedback_id'];
    $query = "SELECT * FROM tbl_feedback WHERE id = $id";
    $result = mysqli_query($dbcon, $query);
    $row = mysqli_fetch_array($result);
        if($result) {
            echo json_encode($row);
        } else {
            echo 201;
        }
    } else if($_POST["filename"] == "edit_slider") { 
        $id = $_POST['slider_id'];
        $query ="SELECT * FROM tbl_slider WHERE id = $id";
        $result = mysqli_query($dbcon, $query);
        $row = mysqli_fetch_assoc($result);
        if($result) {
            echo json_encode($row);
        } else {
            echo 201;
        }
    } else if($_POST["filename"] == "edit_Package") { 
        $id = $_POST['Package_id'];
        $query ="SELECT * FROM tbl_package WHERE id = $id";
        $result = mysqli_query($dbcon, $query);
        $row = mysqli_fetch_assoc($result);
        if($result) {
            echo json_encode($row);
        } else {
            echo 201;
        }
    }


?>
