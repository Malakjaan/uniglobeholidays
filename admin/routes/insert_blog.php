<?php
require_once('../../config/connection.php');
    $title = $_POST['blog_title'] ;
    $desc = $_POST['blog_description'] ;
    $status = $_POST['blog_status'] ;
    $temporary_name = $_FILES['blog_image']['tmp_name'];
    $org_name = $_FILES['blog_image']['name'];
    $path = '../../assets/images/packages/' . $org_name;
    $str = explode('.', $org_name);

    if(move_uploaded_file($temporary_name,$path))
    {
    $query = "INSERT INTO tbl_blog(blog_title, blog_description, blog_image, blog_status) 
    VALUES('$title', '$desc', '$org_name', '$status')";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon); 
        }
}

?>