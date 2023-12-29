<?php
    require_once('../config/connection.php');
    
    $id = $_GET['user_id']; 

    $query = "DELETE FROM tbl_registration WHERE id = $id";
    $result = mysqli_query($dbcon, $query);
    if($result) {
        echo "
        <script>
            alert('Data Deleted Successfuly'); 
            window.open('../views/view_registrations.php','_self');
        </script>";
    } else {
        echo "
        <script>
            alert('Error Occured'); 
            window.open('../views/view_registrations.php'), '_self';
        </script>";
    }
    
?>