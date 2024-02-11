<?php
require_once('../config/connection.php');
    $name = $_POST['name'] ;
    $contact = $_POST['contact'] ;
    $email = $_POST['email'] ;
    $check_in_date = $_POST['check_in_date'] ;
    $check_out_date = $_POST['check_out_date'] ;
    $days = $_POST['days'] ;
    $adults = $_POST['adults'] ;
    $childs = $_POST['childs'] ;

    $query = "INSERT INTO tbl_booking( name,contact,email,check_in_date,check_out_date, days,adults,childs) 
                VALUES('$name', '$contact', '$email', '$check_in_date','$check_out_date', '$days', '$adults', '$childs')";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo "<script> 
                    alert('Your request for tour package submitted successfully.'); 
                    window.open('../index.php','_self');
            </script>";
        } else {
            echo 201;
        }
    
?>

  