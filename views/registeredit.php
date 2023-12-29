<?php
        $id = $_GET['user_id'];
        require_once('../config/myconnection.php');
        $query ="SELECT * FROM employee WHERE id = $id";
        $result = mysqli_query($dbconnection, $query);
        $row = mysqli_fetch_assoc($result);          
?>
<form method="POST" action="../routes/registerupdate.php" enctype="multipart/form-data">
    <input name="name" type="text" value="<?php echo $row['name'];?>" style="padding:10px;background:brown; border-radius:6px" placeholder="Enter Your Name" />
    <br>
    <br>
    <input name="dob" type="date"  value="<?php echo $row['dob'];?>"style="padding:10px;background:brown; border-radius:6px" placeholder="Enter Your Dob" />
    <br>
    <br>
    <input name="email" type="email" value="<?php echo $row['email'];?>" style="padding:10px;background:brown; border-radius:6px" placeholder="Enter Your Email" />
    <br>
    <br>
   
    <input name="image" type="file" style="padding:10px;background:brown; border-radius:6px" title="Choose Your image" />
    <br>
    <img src="../assets/image/<?php echo $row['image']?>" width:="100" height="100" />
    <br>
    <br><br>
    <input type="hidden" name="user_id" value="<?php echo $id?>"  />
    <input type="submit" value="Update your Details" name="buttonUpdate" background:brown; />
</form>