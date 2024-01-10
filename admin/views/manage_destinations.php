<?php 
require_once('../../config/connection.php');
require_once('../includes/header.php'); ?>


    <div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add Destinations Here </h2>
                        <form style="width:720px; color: black" enctype="multipart/form-data"method="post" id="frmDestination">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Destination Name</label> <input class="form-control" id="destination_name" name="destination_name" placeholder="Destination Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Destination Location</label><input class="form-control" id="destination_location" name="destination_location" placeholder="Destination Location" type="text">
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputAddress">Choose Destination Image</label> <input class="form-control" id="image" name="image" type="file" />
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-12">
                                    <label for="number"></label>Destination Description <textarea class="form-control" id="destination_desc" placeholder="Destination Description " name="destination_desc"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="filename" value="insert_destination" />
                            <div class="form-group" >
                            

                                <button class="btn btn-primary" id="btn_save_destination_details" type="submit">Submit</button>
                                </div>

                        </form>
                    </div>
                </div>





<div class="row" STYLE="POSITION: relative; TOP: 30px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View Destination Details </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Destination Name</th>
                                <th scope="col">Destination Location</th>
                                <th scope="col">Destination image</th>
                                <th scope="col">Destination Description</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        require_once('../../config/connection.php');
        $query ="SELECT * FROM tbl_destination";
        $result = mysqli_query($dbcon, $query);  
        while ($row = mysqli_fetch_assoc($result)) {    
       ?>
       <tr>

         <td style="width:5%" ><?php echo $row['id'];?></td>
         <td style="width:15%"><?php echo $row['destination_name'];?></td>
         <td style="width:14%"><?php echo $row['destination_location'];?></td>
         <td style="width:14%"><img style="width:150px; height:150px;" src="../../assets/images/packages/<?php echo $row['image'];?>" /></td>
         <td style="width:14%"><?php echo $row['destination_desc'];?></td>
         <td style="width:11%">
        </td>
            </td>         
         <td style="width:12%">
         <button id="<?php echo $row['id'];?>" type="button" class="btn btn-primary btnEditDestination" data-toggle="modal"  data-target="#editDestination">
                      Edit
                </button>
                <br>
                <button  id="<?php echo $row['id'];?>"  class="btn btn-danger btnDeletedestination" onclick="confirm('Are you sure you want to delete this destination')" value="<?php echo $row['id'];?>" id="btnDeletedestination">Delete</button>
                <br>
         </td>
</tr><?php }?>

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
                    </div>











<?php require_once('../includes/footer.php');
?>






<div class="modal fade" id="editDestination" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Package Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmeditDestination" method="post" style="width: 475px;">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Destination Name</label> <input class="form-control" id="destination_name1" name="destination_name" placeholder="Destination Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Destination Location</label><input class="form-control" id="destination_location1" name="destination_location" placeholder="Destination Location" type="text">
                                </div>
                            </div><br>
                            <div class="form-group">
                                <label for="inputAddress">Choose Destination Image</label> <input class="form-control" id="imageModal1" name="imageModal1" type="file" />
                            </div>
                            <div class="row-row">
                                <img id="myImage11" style="width:150px; height:150px;"/>
                            </div>
                            <div class="form-group col-md-12">
                                    <label for="number"></label>Destination Description <textarea class="form-control" id="destination_desc1" placeholder="Destination Description " name="destination_desc"></textarea>
                                </div>
                            
                                <input type="hidden" name="filename" value="update_destination" id="update_destination" />

                                <input type="hidden" name="destination_id" id="destination_id" />
                                

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary " id="btn_update_destination_details" type="submit">update destination</button>
            </div>
        </form> 

        </div>
        </div>
    </div>
  </div>