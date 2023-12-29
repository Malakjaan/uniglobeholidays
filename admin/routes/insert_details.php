<?php
require_once('../../config/connection.php');

   
if(isset($_POST['filename']) && $_POST['filename'] == 'insert_package') {
    $pn = $_POST['package_name'];
    $pt = $_POST['package_type'];
    $nd = $_POST['no_of_days'];
    $nn = $_POST['no_of_nights'];
    $pc = $_POST['package_cost'];
    
    $temporary_name = $_FILES['image']['tmp_name'];
    $org_name = $_FILES['image']['name'];
    $path = '../../assets/images/packages/' . $org_name;
    $str = explode('.', $org_name);
    

    
    if(move_uploaded_file($temporary_name,$path))
    {
       $query = "INSERT INTO tbl_package(package_name, package_type, no_of_days, no_of_nights, package_cost, image) 
       VALUES('$pn', '$pt','$nd','$nn','$pc', '$org_name')";
        $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon); 
        }
    }
}
?>