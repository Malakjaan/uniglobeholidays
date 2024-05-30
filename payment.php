<?php
include('connection.php');
if(isset($_POST['pay_id']) && isset($_POST['amount']) && isset($_POST['name']))
{
    $pay_id=$_POST['pay_id'];
    $amount=$_POST['amount'];
    $name=$_POST['name'];
    $query="INSERT INTO payment ('name','amount','pay_id','pay_status') VALUES ('$name','$amount','$amount','Success')";
    mysqli_query($dbcon,$query);
}
?>