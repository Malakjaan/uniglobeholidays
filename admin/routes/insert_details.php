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
            $get_package_id = "SELECT max(id) as 'id' FROM tbl_package";
            $run_package_id = mysqli_query($dbcon, $get_package_id);
            $row_package_id = mysqli_fetch_array($run_package_id);
            $package_id     = $row_package_id['id'];
            $dayno = 1;
            while($nd > 0) {
                $insert_desc = "INSERT INTO tbl_package_desc(p_id, day_no, day_title, day_desc, image, added_on) VALUES($package_id, $dayno, '', '', '', NOW())";
                $run_desc    =  mysqli_query($dbcon, $insert_desc);
                $nd--;
                $dayno++;
            }
            echo 200;
        } else {
            echo mysqli_error($dbcon); 
        }
    }
} else if(isset($_POST['filename']) && $_POST['filename'] == 'insert_inc_exc') {
        $p_id  = $_POST['pid'];
        $a_i_e =  $_POST['isie'];

        foreach($_POST['incexc'] as $x) {
            $query = "INSERT INTO tbl_assign_inc_exc(p_id, p_i_e, is_inc_exc) VALUES($p_id, $x, $a_i_e)";
            $run = mysqli_query($dbcon, $query);
        }
        echo 200;
}else if(isset($_POST['filename']) && $_POST['filename'] == 'insert_destination') {
    $dn = $_POST['destination_name'];
    $dl = $_POST['destination_location'];
    $dd = $_POST['destination_desc'];
    
    
    $temporary_name = $_FILES['image']['tmp_name'];
    $org_name = $_FILES['image']['name'];
    $path = '../../assets/images/destinations/' . $org_name;
    $str = explode('.', $org_name);
    

    
    if(move_uploaded_file($temporary_name,$path))
    {
       $query = "INSERT INTO tbl_destination(destination_name, destination_location,image, destination_desc) 
       VALUES('$dn', '$dl','$org_name','$dd')";
        $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon); 
        }
        
    }
} 
else if(isset($_POST['filename']) && $_POST['filename'] == 'insert_gallery') {
    $temporary_name = $_FILES['image']['tmp_name'];
    $org_name = $_FILES['image']['name'];
    $path = '../../assets/images/packages/' . $org_name;
    $str = explode('.', $org_name);
    

    
    if(move_uploaded_file($temporary_name,$path))
    {
       $query = "INSERT INTO tbl_gallery(image) 
       VALUES('$org_name')";
        $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon); 
        }
        
    }
} else if(isset($_POST['filename']) && $_POST['filename'] == 'insert_profile') {
    $nm = $_POST['name'] ;
    $un = $_POST['username'] ;
    $em = $_POST['email'] ;
    $pw = $_POST['password'] ;
    $temporary_name = $_FILES['profile_image']['tmp_name'];
    $org_name = $_FILES['profile_image']['name'];
    $path = '../../assets/images/owner/' . $org_name;
    $str = explode('.', $org_name);

    if(move_uploaded_file($temporary_name,$path))
    {
    $query = "INSERT INTO tbl_login(name, username , email, pwd, image) 
    VALUES('$nm', '$un','$em','$pw', '$org_name')";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon); 
        }
    }
}

?>
