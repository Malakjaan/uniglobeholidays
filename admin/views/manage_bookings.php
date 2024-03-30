<?php require_once('../includes/header.php');?>
<div class="row" STYLE="POSITION: relative; TOP: 30px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View Booking details </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">contact</th>
                                <th scope="col">Email</th>
                                <th scope="col">Check in</th>
                                <th scope="col">Check out</th>
                                <th scope="col">days</th>
                                <th scope="col">Adults</th>
                                <th scope="col">childs</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        require_once('../../config/connection.php');
        $query ="SELECT * FROM tbl_booking";
        $result = mysqli_query($dbcon, $query);  
        while ($row = mysqli_fetch_assoc($result)) {  
       ?>
       <tr>
         <td><?php echo $row['id'];?></td>
         <td><?php echo $row['name'];?></td>
         <td><?php echo $row['contact'];?></td>
         <td><?php echo $row['email'];?></td>
         <td><?php echo $row['check_in_date'];?></td>
         <td><?php echo $row['check_out_date'];?></td>
         <td><?php echo $row['days'];?></td>
         <td><?php echo $row['adults'];?></td>
         <td><?php echo $row['childs'];?></td>
         
         <td>

              <br>
                <button  id="<?php echo $row['id'];?>"  class="btn btn-danger btnDeletebooking" onclick="confirm('Are you sure you want to delete this booking')" value="<?php echo $row['id'];?>" id="btnDeletebook" data-target="btnDeletebooking">Delete</button>

         </td>
</tr><?php }?>
                            </tbody>
                        </table>
                    </div>
                    </div>
            </div>
            <?php require_once('../includes/footer.php'); ?>     

