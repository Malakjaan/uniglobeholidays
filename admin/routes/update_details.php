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
    } else if($_POST["filename"]=="update_slider"){
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
    else if($_POST["filename"]=="update_package"){
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
    }else if($_POST["filename"]=="update_contact"){
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
    else if($_POST["filename"]=="update_package_description"){
        $id = $_POST['p_id'];
        $dt = $_POST['day_title'];
        $dd = $_POST['day_desc'];
        $dn = $_POST['day_number'];

        $query = "UPDATE tbl_package_desc SET day_title='$dt', day_desc = '$dd', is_filled = 1, added_on = NOW() WHERE p_id = $id AND day_no = $dn";
        $result = mysqli_query($dbcon, $query);
        
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }
    }
    else if($_POST["filename"]=="update_package_description_button"){
        $id = $_POST['p_id'];
        $dt = $_POST['day_title'];
        $dd = $_POST['day_desc'];
        $pdi = $_POST['p_d_id'];

        $query = "UPDATE tbl_package_desc SET day_title='$dt', day_desc = '$dd', is_filled = 1, added_on = NOW() WHERE p_id = $id AND id = $pdi";
        $result = mysqli_query($dbcon, $query);
        
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }
    }
    else if($_POST["filename"]=="update_destination"){

        $id = $_POST['destination_id'];
        $dn = $_POST['destination_name'];
        $dl = $_POST['destination_location'];
        $dd = $_POST['destination_desc'];

        $temp_name = $_FILES['imageModal1']['tmp_name'];
        $org_name = $_FILES['imageModal1']['name'];
        $size = $_FILES['imageModal1']['size'];
        $path = '../../assets/images/packages/' . $org_name;

        if($size > 0) {
            move_uploaded_file($temp_name,$path);
            $query = "UPDATE tbl_destination SET destination_name='$dn', destination_location = '$dl', destination_desc = '$dd', image='$org_name' WHERE id = $id";
            $result = mysqli_query($dbcon, $query);
        } else {
            $query = "UPDATE tbl_destination  SET destination_name='$dn', destination_location = '$dl', destination_desc = '$dd' WHERE id = $id";
            $result = mysqli_query($dbcon, $query);
        }
            
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }
    }
    elseif($_POST["filename"]=="update_blog"){
        $id = $_POST['blog_id'];
        $bt = $_POST['blog_title1'];
        $bd = $_POST['blog_description1'];
        $temp_name = $_FILES['blog_image1']['tmp_name'];
        $org_name = $_FILES['blog_image1']['name'];
        $size = $_FILES['blog_image1']['size'];
        $path = '../../assets/images/packages/' . $org_name;

        if($size > 0) {
            move_uploaded_file($temp_name,$path);
            $query = "UPDATE tbl_blog SET blog_title='$bt', blog_description = '$bd', blog_image='$org_name' WHERE id = $id";
            $result = mysqli_query($dbcon, $query);
            echo 200;
        } else {
            $query = "UPDATE tbl_blog  SET blog_title='$bt', blog_description = '$bd' WHERE id = $id";
            $result = mysqli_query($dbcon, $query);
        }
            
        if($result) {
            echo 200;
        } else {
            echo mysqli_error($dbcon);
        }
        }
        elseif($_POST["filename"]=="update_hotels"){
            $id = $_POST['hotel_id'];
            $hn = $_POST['hotel_name1'];
            $hl = $_POST['hotel_location1'];
            $hd = $_POST['hotel_description1'];
            $st = $_POST['standard1'];
            $rt = $_POST['rating1'];
            
            $temp_name = $_FILES['hotel_image1']['tmp_name'];
            $org_name = $_FILES['hotel_image1']['name'];
            $size = $_FILES['hotel_image1']['size'];
            $path = '../../assets/images/packages/' . $org_name;
    
            if($size > 0) {
                move_uploaded_file($temp_name,$path);
                $query = "UPDATE tbl_hotels SET hotel_name='$hn', hotel_location = '$hl',hotel_description = '$hd', standard = '$st', rating = '$rt', hotel_image='$org_name' WHERE id = $id";
                $result = mysqli_query($dbcon, $query);
                echo 200;
            }  else {
                $query = "UPDATE tbl_hotels  SET hotel_name='$hn', hotel_location = '$hl',hotel_description = '$hd', standard = '$st', rating = '$rt' WHERE id = $id";
                $result = mysqli_query($dbcon, $query);
            }
                
            if($result) {
                echo 200;
            } else {
                echo mysqli_error($dbcon);
            }
            }
?>
