<?php 

require_once('../includes/header.php'); 

require_once('../../config/connection.php');
?>

    <div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add Hotels </h2>
                        <form style="width:720px;" enctype="multipart/form-data" id="frmhotel">
                            <div class="form-row">
                            <div class="row"><div class="form-group col-md-11">
                                    <label for="inputtext"> Hotel Name</label> <input class="form-control" id="hotel_name" name="hotel_name" placeholder="Hotel Name" type="text">
                                </div>
                            <div class="row">
                                
                            <div class="form-group col-md-8">
                                <label for="inputlocation">Hotel Location</label> 
                                <select style="color: black"  name="hotel_location" class="form-control" id="hotel_location" >
                                        <option value=""> Choose Hotel Location </option>
                                        <?php
                                            $get_loc = "SELECT * FROM tbl_locations";
                                            $run_loc = mysqli_query($dbcon, $get_loc);
                                            while($row_loc = mysqli_fetch_assoc($run_loc)) {
                                        ?>
                                        <option style="color: black"  value="<?=$row_loc['id']?>">  <?=$row_loc['name']?>  </option>
                                        <?php } ?>
                                    </select> 
                            </div>
                            <div class="col-md-3 btn btn-success" style="position:absolute;top:165px;right:70px; ">
                            <a href="hotel_location.php">add new type</a>
                            </div>
                            </div>
                             <div class="row">
                                
                            <div class="form-group col-md-12">
                                <label for="inputlocation">Hotel description</label> <textarea class="form-control" id="hotel_description" name="hotel_description" placeholder="Hotel Description"></textarea>
                            </div>
                            </div>
                            <div class="row">

                            <div class="form-group col-md-6">
                                    <label for="inputContact">Your Rating</label>
                                    <select name="rating" class="form-control" id="rating" >
                                        <option value="1"> 1 Star </option>
                                        <option value="2"> 2 Star</option>
                                        <option value="3"> 3 Star</option>
                                        <option value="4"> 4 Star</option>
                                        <option value="5"> 5 Star</option>
                                    </select> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputlocation">types of hotel</label> 
                                <select style="color: black"  name="standard" class="form-control" id="standard" >
                                        <option value=""> Choose hotel type</option>
                                        <?php
                                            $get_loc = "SELECT * FROM tbl_standard";
                                            $run_loc = mysqli_query($dbcon, $get_loc);
                                            while($row_loc = mysqli_fetch_assoc($run_loc)) {
                                        ?>
                                        <option style="color: black"  value="<?=$row_loc['id']?>">  <?=$row_loc['standard']?>  </option>
                                        <?php } ?>
                                    </select> 
                            </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-md-12">
                                <label for="inputAddress">Choose Hotel Image</label> <input class="form-control" id="hotel_image" name="hotel_image" type="file" />
                            </div>
                        <br>
                        <div class="form-group col-md-8">
                                <button class="btn btn-primary" id="btn_save_hotel_details" type="submit">Add hotel</button>
                        </div>
                        </form>

                        <br>
    
            <div class="row" STYLE="POSITION: relative; TOP: 30px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View hotel details </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Hotel Name</th>
                                <th scope="col">Hotel location</th>
                                <th scope="col">Hotel description</th>
                                <th scope="col">Hotel Types</th>
                                <th scope="col">image</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        $query ="SELECT * FROM tbl_hotels";
        $result = mysqli_query($dbcon, $query);  //performs a query against database
        while ($row = mysqli_fetch_assoc($result)) {     //fetch result row as an associate array
       ?>
       <tr>

         <td style="width:5%" ><?php echo $row['id'];?></td>
         <td style="width:15%"><?php echo $row['hotel_name'];?></td>
         <td style="width:14%"><?php echo $row['hotel_location'];?></td>
         <td style="width:30%; text-align: justify"><?php echo $row['hotel_description'];?></td>
         <td style="width:15%"><?php echo $row['standard'];?></td>
         <td style="width:14%"><img style="width:100px; height:100px;" src="../../assets/images/packages/<?php echo $row['hotel_image'];?>" /></td>
         <td style="width:11%">
            <?php   
                while($row['rating'] >0) {
                    echo '<i class="fa fa-star" style="color: yellow"></i>';
                    $row['rating']--;
                }
            ?>
        </td>  
             <td>
         <button id="<?php echo $row['id'];?>" type="button" class="btn btn-primary btnEdithotels" data-toggle="modal"  data-target="#hotels" >
                      Edit
                </button>

              <br>
                <button  id="<?php echo $row['id'];?>"  class="btn btn-danger btnDeletehotel" onclick="confirm('Are you sure you want to delete this contact')" value="<?php echo $row['id'];?>" id="btnDeletehotel" data-target="btnDeletehotel">Delete</button>

         </td>
     </tr>
     <?php }?>

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
    

<!-- Button trigger modal -->



<?php require_once('../includes/footer.php'); ?>

<!-- Modal -->
<div class="modal fade" id="hotels" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit hotel Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmEdithotels" style="width:720px;">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="inputtext"> Hotel Name</label> <input class="form-control" id="hotel_name1" name="hotel_name1" placeholder="Hotel Name" type="text">
                                </div>
                            </div>
                            <div class="row">
                                
                            <div class="form-group col-md-8">
                                <label for="inputlocation">Hotel Location</label> 
                                <select name="hotel_location1" class="form-control" id="hotel_location1" >
                                        <option value=""> Choose Hotel Location </option>
                                        <?php
                                            $get_loc = "SELECT * FROM tbl_locations";
                                            $run_loc = mysqli_query($dbcon, $get_loc);
                                            while($row_loc = mysqli_fetch_assoc($run_loc)) {
                                        ?>
                                        <option value="<?=$row_loc['id']?>">  <?=$row_loc['name']?>  </option>
                                        <?php } ?>
                                    </select> 
                            </div>
                            </div>
                             <div class="row">
                                
                            <div class="form-group col-md-8">
                                <label for="inputlocation">Hotel description</label> <textarea class="form-control" id="hotel_description1" name="hotel_description1" placeholder="Hotel Description"></textarea>
                            </div>
                            </div>
                            <div class="row">

                            <div class="form-group col-md-4">
                                    <label for="inputContact">Your Rating</label>
                                    <select name="rating1" class="form-control" id="rating1" >
                                        <option value="1"> 1 Star </option>
                                        <option value="2"> 2 Star</option>
                                        <option value="3"> 3 Star</option>
                                        <option value="4"> 4 Star</option>
                                        <option value="5"> 5 Star</option>
                                    </select> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputlocation">types of hotel</label> 
                                <select style="color: black"  name="standard" class="form-control" id="standard" >
                                        <option value=""> Choose hotel type</option>
                                        <?php
                                            $get_loc = "SELECT * FROM tbl_standard";
                                            $run_loc = mysqli_query($dbcon, $get_loc);
                                            while($row_loc = mysqli_fetch_assoc($run_loc)) {
                                        ?>
                                        <option style="color: black"  value="<?=$row_loc['id']?>">  <?=$row_loc['standard']?>  </option>
                                        <?php } ?>
                                    </select> 
                            </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-md-8">
                                <label for="inputAddress">Choose Hotel Image</label> <input class="form-control" id="hotel_image1" name="hotel_image1" type="file" />
                            </div>
                        <br><div class="row">
                                <img id="myImage" style="width:150px; height:150px;"/>
                            </div>
                        <div class="form-group col-md-8">
                        <input type="hidden" name="filename" value="update_hotels" />
                        <input type="hidden" name="hotel_id" id="hotel_id" />
                        
      </div>
      <div class="modal-footer col-md-6">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="btn_update_hotel_details" type="submit">Update hotels</button>
         </div>
        </form>

      </div>
    </div>
  </div>
</div>