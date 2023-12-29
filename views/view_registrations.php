<a href="registration.php">Add New Record</a>
<table CELLSPACING="10" CELLPADDING="10" border="1">
    <thead>
        <tr>
            <th># </th>
            <th>Name </th>
            <th>Email </th>
            <th>Address </th>
            <th>Cell </th>
            <th>Photo </th>
            <th>Date of Birth </th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>


    <?php
        require_once('../config/connection.php');
        $query ="SELECT * FROM tbl_registration";
        $result = mysqli_query($dbcon, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            
    ?>
        <tr>
            <td> <?php echo $row['id'];?>  </td>
            <td> <?php echo $row['name'];?> </td>
            <td> <?php echo $row['email'];?> </td>
            <td> <?php echo $row['address'];?> </td>
            <td> <?php echo $row['phone'];?> </td>
            <td> <img src="../assets/images/<?php echo $row['photo'];?>" width="150"/>  </td>
            <td> <?php echo $row['dob'];?> </td>
            <td> 
                <a href="edit_details.php?user_id=<?php echo $row['id'];?>" name="btnEdit" style="padding:10px;text-decoration:none; background:aqua; border-radius:6px; font-size:12px; font-weight:bold"> Edit </a>
                &nbsp;
                <a href="../routes/delete_user.php?user_id=<?php echo $row['id'];?>" name="btnDelete" style="padding:10px;text-decoration:none; background:red; color:white; border-radius:6px; font-size:12px; font-weight:bold">Delete</a>

            </td>
       </tr>

<?php  } ?>

    <tbody>
</table>