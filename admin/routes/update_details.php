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
    }
?>
<?php
