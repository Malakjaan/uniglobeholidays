<?php

    require_once('../config/connection.php');
    if(isset($_POST['btnRegistration'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];

        $temporary_name = $_FILES['files']['tmp_name'];
        $original_name = $_FILES['files']['name'];
        $size = $_FILES['files']['size'];
        $path = '../assets/images/' . $original_name;

        

        $str = explode('.', $original_name);
        
        if($size < 1200000) {
            if($str[1] == 'jpg' || $str[1] == 'png' || $str[1] == 'jpeg') {
                if(move_uploaded_file($temporary_name,$path))
                {
                $query = "INSERT INTO tbl_registration(name, phone, email, address, dob, photo) 
                VALUES('$name', '$phone', '$email', '$address', '$dob', '$original_name')";
                $result = mysqli_query($dbcon, $query);
                    if($result) {
                        echo "
                        <script>
                            alert('Registration Done Successfuly'); 
                            window.open('../views/reg routes.php','_self');
                        </script>";
                    } else {
                        echo "
                        <script>
                            alert('Error Occured'); 
                            window.open('../views/reg routes.php'), '_self';
                        </script>";
                    }
                }
            } else {
                echo "
                        <script>
                            alert('Error Occured. File format not supported. Please upload file only with jpg/png extension'); 
                            window.open('../views/reg routes.php', '_self');
                        </script>";
            }
        } else {
            echo "
                        <script>
                            alert('Error Occured. File Size Exceeded. Please upload max size 2MB'); 
                            window.open('../views/reg routes.php', '_self');
                        </script>";
        }

        




        }
    else {
         }


?>