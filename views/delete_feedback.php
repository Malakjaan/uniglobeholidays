<?php
    require_once('../config/connection.php');
    
    $id = $_POST['feedback_id'];

    $query = "DELETE FROM tbl_feedback WHERE id = $id";
    $row = mysqli_fetch_array($result);
    if($result) {
        echo $row = mysqli_fetch_array($result);
    } else {
        echo  201;
    }
    
?>


