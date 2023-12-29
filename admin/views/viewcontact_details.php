<?php require_once('../includes/header.php');?>

<div class="row" STYLE="POSITION: absolute;TOP: 30px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View Contact Details </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Primary Email</th>
                                <th scope="col">Secondary Email</th>
                                <th scope="col">Head Office</th>
                                <th scope="col">Branch Office</th>
                                <th scope="col">Primary Contact</th>
                                <th scope="col">Secondary Contact</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        require_once('../config/connection.php');
        $query ="SELECT * FROM tbl_contact";
        $result = mysqli_query($dbcon, $query);  //performs a query against database
        while ($row = mysqli_fetch_assoc($result)) {     //fetch result row as an associate array
       ?>
       <tr>
         <td style="padding: 10px;background: aqua;color: white;border-radius: 8px;font-size: 12px;font-weight: bold"><?php echo $row['id'];?></td>
         <td style="padding: 10px;background: violet;color: white;border-radius: 8px;font-size: 12px;font-weight: bold"><?php echo $row['pemail'];?></td>
         <td style="padding: 10px;background: violet;color: white;border-radius: 8px;font-size: 12px;font-weight: bold"><?php echo $row['semail'];?></td>
         <td style="padding: 10px;background: violet;color: white;border-radius: 8px;font-size: 12px;font-weight: bold"><?php echo $row['paddress'];?></td>
         <td style="padding: 10px;background: violet;color: white;border-radius: 8px;font-size: 12px;font-weight: bold"><?php echo $row['saddress'];?></td>
         <td style="padding: 10px;background: violet;color: white;border-radius: 8px;font-size: 12px;font-weight: bold"><?php echo $row['pcontact'];?></td>
         <td style="padding: 10px;background: violet;color: white;border-radius: 8px;font-size: 12px;font-weight: bold"><?php echo $row['scontact'];?></td>
         
         <td>
         <a href="edit_details.php?user_id=<?php echo $row['id'];?>" name="btnEdit" style="padding:10px;text-decoration:none; background:aqua; border-radius:6px; font-size:12px; font-weight:bold"> Edit </a>
                &nbsp;
                <a href="../routes/delete_user.php?user_id=<?php echo $row['id'];?>" name="btnDelete" style="padding:10px;text-decoration:none; background:red; color:white; border-radius:6px; font-size:12px; font-weight:bold">Delete</a>

         </td>
</tr><?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>





