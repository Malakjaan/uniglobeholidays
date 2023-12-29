<a href="register.php" style="color:brown; padding:200px;position:relative;font-weight:bold;">New Record</a>
<table CELLSPACING="10" CELLPADDING="12" border="10">
    <thead>
    <tr>
            
            <th>id</th>
            <th>Name </th>
            <th>dob </th>
            <th>email </th>
            <th>image </th>
            <th>perform action on it<th>  
    </tr>
    </thead>
    <tbody>
           <?php
                require_once('../config/myconnection.php');
                $query ="SELECT * FROM employee";
                $result=mysqli_query($dbconnection, $query);
                while ($row=mysqli_fetch_array($result)) {
                
           ?>
          <tr>
            <td> <?php echo $row ['id']; ?> </td>
            <td> <?php echo $row['name']; ?></td>
            <td> <?php echo $row['dob']?></td>
            <td> <?php echo $row['email']?></td>
            <td><img src="../assets/image/<?php echo $row['image']?>" width:50/></td>
            <td> 
                <a href="registeredit.php?user_id=<?php echo $row['id'];?>" name="buttonEdit" style="padding:10px;text-decoration:none; background:black;color:white; border-radius:6px; font-size:12px; font-weight:bold">Edit</a>
                &nbsp;
                <a href="../routes/registerdelete.php?user_id=<?php echo $row['id'];?>" name="buttonDelete" style="padding:10px;text-decoration:none; background:black; color:white; border-radius:6px; font-size:12px; font-weight:bold">Delete</a>

            </td>
            </tr>
       
            <?php
        } 
            ?>

    </tbody>
</table>
