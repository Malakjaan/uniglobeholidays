<?php
    require_once('../../config/connection.php');
    if(isset($_POST['filename']) && $_POST['filename'] == 'update_feedback'){    
    $id = $_POST['feedback_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

    $query = "UPDATE tbl_feedback SET name='$name', email = '$email', comment = '$comment', rating = '$rating' WHERE id = $id";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }
    } elseif($_POST["filename"]=="update_slider"){
        $id = $_POST['slider_id'];
        $sh = $_POST['s_headline'];
        $st = $_POST['s_tagline'];
        $temp_name = $_FILES['s_image']['tmp_name'];
        $org_name = $_FILES['s_image']['name'];
        $size = $_FILES['s_image']['size'];
        $path = '../../assets/images/slider/' . $org_name;

        if($size > 0) {
            move_uploaded_file($temp_name,$path);
            $query = "UPDATE tbl_slider SET slider_headline='$sh', slider_tagline = '$st', image='$org_name' WHERE id = $id";
            $result = mysqli_query($dbcon, $query);
        } else {
            $query = "UPDATE tbl_slider SET slider_headline='$sh', slider_tagline = '$st' WHERE id = $id";
            $result = mysqli_query($dbcon, $query);
        }
            
            if($result) {
                echo 200;
            } else {
                echo mysqli_error( $dbcon);
            }
    }
    elseif($_POST["filename"]=="update_package"){
        $id = $_POST['package_id'];
        $pn = $_POST['package_name'];
        $pt = $_POST['package_type'];
        $nd = $_POST['no_of_days'];
        $nn = $_POST['no_of_nights'];
        $pc = $_POST['package_cost'];

        $temp_name = $_FILES['imageModal']['tmp_name'];
        $org_name = $_FILES['imageModal']['name'];
        $size = $_FILES['imageModal']['size'];
        $path = '../../assets/images/packages/' . $org_name;

        if($size > 0) {
            move_uploaded_file($temp_name,$path);
            $query = "UPDATE tbl_package SET package_name='$pn', package_type = '$pt', no_of_days = '$nd', no_of_nights = '$nn', package_cost = '$pc', image='$org_name' WHERE id = $id";
            $result = mysqli_query($dbcon, $query);
        } else {
            $query = "UPDATE tbl_package  SET package_name='$pn', package_type = '$pt', no_of_days = '$nd', no_of_nights = '$nn', package_cost = '$pc' WHERE id = $id";
            $result = mysqli_query($dbcon, $query);
        }
            
            if($result) {
                echo 200;
            } else {
                echo mysqli_error($dbcon);
            }
    }elseif($_POST["filename"]=="update_contact"){
    $id = $_POST['contact_id'];
    $pem = $_POST['pemail'];
    $sem = $_POST['semail'];
    $iad = $_POST['iaddress'];
    $nad = $_POST['saddress'];
    $pcon = $_POST['pcontact'];
    $scon = $_POST['scontact'];

    $query = "UPDATE tbl_contact SET pemail='$pem', semail = '$sem', paddress = '$iad', saddress = '$nad' , pcontact = '$pcon', scontact = '$scon' WHERE id = $id";
    $result = mysqli_query($dbcon, $query);
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }
    } 
    elseif($_POST["filename"]=="update_package_description"){
        $id = $_POST['p_id`'];
        $dt = $_POST['day_title'];
        $dd = $_POST['day_desc'];
        $dn = $_POST['day_no'];
        $if = $_POST['is_filled'];
        $ao = $_POST['added_on'];

        $temp_name = $_FILES['image']['tmp_name'];
        $org_name = $_FILES['image']['name'];
        $size = $_FILES['image']['size'];
        $path = '../../assets/images/packages/' . $org_name;

        if($size > 0) {
            move_uploaded_file($temp_name,$path);
            $query = "UPDATE tbl_package_desc SET day_title='$dt', day_desc = '$dd', day_no = '$dn', is_filled = '$if', added_on = '$ao', image='$org_name' WHERE id = $id && package_type=$package_type";
            $result = mysqli_query($dbcon, $query);
        } else {
            $query = "UPDATE tbl_package_desc SET day_title='$dt', day_desc = '$dd', is_filled = '$if', added_on = '$ao' WHERE id = $id";
            $result = mysqli_query($dbcon, $query);
        }
            
            if($result) {
                echo 200;
            } else {
                echo mysqli_error($dbcon);
            }
        }
?>
