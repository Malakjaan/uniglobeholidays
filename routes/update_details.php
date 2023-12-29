<?php

    require_once('../config/connection.php');
    if(isset($_POST['btnUpdate'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $id = $_POST['user_id'];

        $temp_name = $_FILES['photo']['tmp_name'];
        $org_name = $_FILES['photo']['name'];
        $size = $_FILES['photo']['size'];
        $path = '../assets/images/' . $org_name;
        
        if($size > 0) {
            move_uploaded_file($temp_name,$path);
            $query = "UPDATE tbl_registration SET name='$name', phone = '$phone', email = '$email', address = '$address', 
                      dob = '$dob', photo='$org_name' WHERE id = $id";

        } else {
            
            $query = "UPDATE tbl_registration SET name='$name', phone = '$phone', email = '$email', address = '$address', 
                        dob = '$dob' WHERE id = $id";
        }
            $result = mysqli_query($dbcon, $query);
            if($result) {
                echo "
                <script>
                    alert('Details Updated Successfuly'); 
                    window.open('../views/view_registrations.php','_self');
                </script>";
            } else {
                echo "
                <script>
                    alert('Error Occured'); 
                    window.open('_self','../views/view_registrations.php');
                </script>";
            }
        
        
        }
    else {

    }


?>