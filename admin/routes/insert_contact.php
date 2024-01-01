<?php
require_once('../../config/connection.php');
    $pem = $_POST['pemail'] ;
    $sem = $_POST['semail'] ;
    $iad = $_POST['iaddress'] ;
    $nad = $_POST['saddress'] ;
    $pcon = $_POST['pcontact'] ;
    $scon = $_POST['scontact'] ;

    $query = "INSERT INTO tbl_contact(pemail,semail,paddress,saddress,pcontact, scontact) 
                VALUES('$pem', '$sem', '$iad', '$nad','$pcon', '$scon')";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200; 
        } else {
            echo 201;
        }
    
?>

  