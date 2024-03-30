<?php
require_once('../config/connection.php');
    $name = $_POST['name'] ;
    $contact = $_POST['contact'] ;
    $email = $_POST['email'] ;
    $check_in_date = $_POST['check_in_date'] ;
    $check_out_date = $_POST['check_out_date'] ;
    $days = $_POST['days'] ;
    $adults = $_POST['adults'] ;
    $childs = $_POST['childs'];

    $myBudget = $_POST['my_budget'];


    $msg  = '<span style="color: green; font-size:20px">Welcome to UniGlobe Holidays. Below are the tour packages based on your budget. Please find the details and contact us accordingly for final confirmation.</span><<br />';
    $query = "select * from tbl_package WHERE package_cost < '$myBudget'";
    $run = mysqli_query($dbcon, $query);
    while($row = mysqli_fetch_assoc($run)) {
       $msg .= "<b>" . $row['package_name'] . "</b><br />";
       $msg .= $row['no_of_days'] . "<br />";
       $msg .= $row['no_of_nights'] . "<br />";
    }

    if(@mail($email,  "Tour Package Details", $msg)) {

    } else {
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
    }

    
    
?>