<?php
    require_once('../../config/connection.php');
    $id = $_POST['slider_id'];
    $sh = $_POST['slider_headline'];
    $st = $_POST['slider_tagline'];
    $ss = $_POST['slider_status'] ;
    $org_name = $_POST['image'];
    $temp_name = $_FILES['image']['tmp_name'];
        $org_name = $_FILES['image']['name'];
        $size = $_FILES['image']['size'];
        $path = '../../assets/images/slider/' . $org_name;
        if($size > 0) {
            move_uploaded_file($temp_name,$path);
            $query = "UPDATE tbl_slider SET slider_headline='$sh', slider_tagline = '$st', image='$image' WHERE id = $id";

        } else {
            
            $$query = "UPDATE tbl_slider SET slider_headline='$sh', slider_tagline = '$st', image='$image' WHERE id = $id";
        }
            $result = mysqli_query($dbcon, $query);
            if($result) {
                echo "
                <script>
                    alert('Details Updated Successfuly'); 
                    window.open('../views/view_slider.php','_self');
                </script>";
            } else {
                echo "
                <script>
                    alert('Error Occured'); 
                    window.open('_self','../views/view_slider.php');
                </script>";
            }
?>
