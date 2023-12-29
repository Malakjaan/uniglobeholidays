<?php
    require_once('../../config/connection.php');
    $id = $_POST['slider_id'];

    $query = "DELETE FROM  tbl_slider WHERE id = $id";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }
    
?>
