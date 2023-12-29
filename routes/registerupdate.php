<?php

    require_once('../config/myconnection.php');
    if(isset($_POST['buttonUpdate'])) {
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $id = $_POST['user_id'];

        $temp_name = $_FILES['image']['tmp_name'];
        $org_name = $_FILES['image']['name'];
        $size = $_FILES['image']['size'];
        $path = '../assets/image/' . $org_name;
        
        if($size > 0) {
            move_uploaded_file($temp_name,$org_name);
            $query = "UPDATE employee SET name='$name', dob = '$dob', email = '$email',image='$org_name' WHERE id = $id";

        } else {
            
            $query = "UPDATE employee SET name='$name',dob = '$dob', email = '$email',  WHERE id = $id";
        }
            $result = mysqli_query($dbconnection, $query);
            if($result) {
                echo "
                <script>
                    alert('Details Updated Successfuly'); 
                    window.open('../views/register1.php','_self');
                </script>";
            } else {
                echo "
                <script>
                    alert('Error Occured'); 
                    window.open('_self','../views/register1.php');
                </script>";
            }
        
        
        }
    else {

    }


?>