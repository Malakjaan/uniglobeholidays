<?php
require_once('../../config/connection.php');
    $sh = $_POST['slider_headline'] ;
    $st = $_POST['slider_tagline'] ;
    $ss = $_POST['slider_status'] ;
    $temporary_name = $_FILES['slider_image']['tmp_name'];
    $org_name = $_FILES['slider_image']['name'];
    $path = '../../assets/images/slider/' . $org_name;
    $str = explode('.', $org_name);

    if(move_uploaded_file($temporary_name,$path))
    {
    $query = "INSERT INTO tbl_slider(slider_headline, slider_tagline, image, slider_status) 
    VALUES('$sh', '$st', '$org_name', '$ss')";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon); 
        }
    }

?>