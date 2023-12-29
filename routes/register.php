<?php

    require_once('../config/myconnection.php');
    if(isset($_POST['buttonRegistration'])) {
    
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];

        $temporary_name = $_FILES['files']['tmp_name'];
        $original_name = $_FILES['files']['name'];
        $size = $_FILES['files']['size'];
        $path = '../assets/image/' . $original_name;

        

        $str = explode('.', $original_name);
        
        if($size < 12000000) {
            if($str[1] == 'jpg' || $str[1] == 'png' || $str[1] == 'jpeg') {
                if(move_uploaded_file($temporary_name,$path))
                {
                $query = "INSERT INTO employee(name, dob, email, image) 
                VALUES('$name', '$dob', '$email', '$original_name')";
                $result = mysqli_query($dbconnection, $query);
                    if($result) {
                        echo "
                        <script>
                            alert('you have Registered Successfuly'); 
                            window.open('../views/register.php','_self');
                        </script>";
                    } else {
                        echo "
                        <script>
                            alert('there is an error'); 
                            window.open('../views/register.php'), '_self';
                        </script>";
                    }
                }
            } else {
                echo "
                        <script>
                            alert('Error Occur becoz File format is not supported. Please upload your file only with other extension'); 
                            window.open('../views/register.php', '_self');
                        </script>";
            }
        } else {
            echo "
                        <script>
                            alert('Error Occur . File Size Exceeded ur limit . Please upload maximum size 2MB'); 
                            window.open('../views/register.php', '_self');
                        </script>";
        }

        




        }
    else {
         }


?>