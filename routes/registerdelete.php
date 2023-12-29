<?php
    require_once('../config/myconnection.php');
    $id = $_GET['user_id']; 

    $query = "DELETE FROM employee WHERE id = $id";
    $result = mysqli_query($dbconnection, $query);
    if($result) {
        echo "
        <script>
            alert('Data Deleted Successfuly'); 
            window.open('../views/register1.php','_self');
        </script>";
    } else {
        echo "
        <script>
            alert('Error Occured'); 
            window.open('../views/register1.php'), '_self';
        </script>";
    }
    
?>