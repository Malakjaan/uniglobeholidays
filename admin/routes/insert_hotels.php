<?php
require_once('../../config/connection.php');
    $hotel = $_POST['hotel_name'] ;
    $location = $_POST['hotel_location'] ;
    $description = $_POST['hotel_description'] ;
    $rating = $_POST['rating'] ;
    $standard = $_POST['standard'] ;
    $temporary_name = $_FILES['hotel_image']['tmp_name'];
    $org_name = $_FILES['hotel_image']['name'];
    $path = '../../assets/images/packages/' . $org_name;
    $str = explode('.', $org_name);

    if(move_uploaded_file($temporary_name,$path))
    {
    $query = "INSERT INTO tbl_hotels(hotel_name, hotel_location, hotel_description, rating, standard, hotel_image) 
    VALUES('$hotel', '$location', '$description','$rating','$standard', '$org_name')";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon); 
        }
    }

?>