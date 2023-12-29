<?php
    require_once('../config/connection.php');
    if(isset($_POST['btnRegistration'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];

        $temp_name = $_FILES['photo']['tmp_name'];
        $org_name = $_FILES['photo']['name'];
        $size = $_FILES['photo']['size'];
        $path = '../assets/images/' . $org_name;

        
        if(move_uploaded_file($temp_name,$path))
        {
        $query = "INSERT INTO tbl_registration(name, phone, email, address, dob, photo) 
        VALUES('$name', '$phone', '$email', '$address', '$dob', '$org_name')";
        $result = mysqli_query($dbcon, $query);
            if($result) {
                echo "
                <script>
                    alert('Registration Done Successfuly'); 
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
        }
    else {

    }


?>