<?php
        $id = $_GET['user_id'];
        require_once('../config/connection.php');
        $query ="SELECT * FROM tbl_view_contact_details WHERE id = $id";
        $result = mysqli_query($dbcon, $query);
        $row = mysqli_fetch_assoc($result);
            
?>

<form method="POST" action="../routes/update_details.php" enctype="multipart/form-data">
    <input name="text" type="text" value="<?php echo $row['name'];?>" style="padding:10px; border-radius:6px" placeholder="Enter Your Name" />
    <br>
    <br>
    <input name="email" type="email" value="<?php echo $row['email'];?>" style="padding:10px; border-radius:6px" placeholder="Enter Your Email" />
    <br>
    <br>
    <input name="phone" type="number" value="<?php echo $row['phone'];?>" style="padding:10px; border-radius:6px" placeholder="Enter Your Cell" />
    <br>
    <br>
    <input name="dob" type="date"  value="<?php echo $row['dob'];?>"style="padding:10px; border-radius:6px" placeholder="Enter Your Dob" />
    <br>
    <br>
    <input name="address" type="text" value="<?php echo $row['address'];?>" style="padding:10px; border-radius:6px" placeholder="Enter Your Address" />
    <br>
    <br>
   
    <input name="photo" type="file" style="padding:10px; border-radius:6px" title="Choose Your file" />
    <br>
    <img src="../assets/images/<?php echo $row['photo']?>" width:="100" height="100" />
    <br>
    <br><br>
    <input type="hidden" name="user_id" value="<?php echo $id?>" />
    <input type="submit" value="Update Details" name="btnUpdate" />
</form>