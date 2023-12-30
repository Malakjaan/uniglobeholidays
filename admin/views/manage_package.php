<?php 
require_once('../../config/connection.php');
require_once('../includes/header.php'); ?>


    <div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add Package Details Here </h2>
                        <form style="width:720px; color: black" enctype="multipart/form-data"method="post" id="frmPackage">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Package Name</label> <input class="form-control" id="package_name" name="package_name" placeholder="Package Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Package Type</label> 
                                    <select style="color:black" class="form-control" id="package_type" type="text" name="package_type">
                                        <option>Choose Package Type</option>
                                        <?php
                                            $get_type = "SELECT * FROM tbl_package_type";
                                            $run_type = mysqli_query($dbcon, $get_type);
                                            while ($row = mysqli_fetch_assoc($run_type)) {
                                        ?>
                                            <option value="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Choose Package Image</label> <input class="form-control" id="image" name="image" type="file" />
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="number">No of Days</label> <input class="form-control" id="no_of_days" name="no_of_days" placeholder="No of Days" type="number">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="number"></label>Package cost <input class="form-control" id="package_cost" placeholder="Package cost " type="number" name="package_cost">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="number"></label>No of Nights <input class="form-control" id="no_of_nights" readonly placeholder="No of Nights" type="number" name="no_of_nights">
                                </div>
                            </div>

                            <input type="hidden" name="filename" value="insert_package" />
                            <div class="form-group" >
                            
                                <button class="btn btn-primary" id="btn_save_package_details" type="submit"  name="submit">Submit</button>
                                </div>
                                
                        </form>
                    </div>
                </div>
            




<div class="row" STYLE="POSITION: relative; TOP: 30px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View Package Details </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Package Name</th>
                                <th scope="col">Package Type</th>
                                <th scope="col">Package image</th>
                                <th scope="col">No of Days</th>
                                <th scope="col">No of Nights</th>
                                <th scope="col">Package cost</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        require_once('../../config/connection.php');
        $query ="SELECT * FROM tbl_package";
        $result = mysqli_query($dbcon, $query);  
        while ($row = mysqli_fetch_assoc($result)) {    
       ?>
       <tr>

         <td style="width:5%" ><?php echo $row['id'];?></td>
         <td style="width:15%"><?php echo $row['package_name'];?></td>
         <td style="width:14%"><?php echo $row['package_type'];?></td>
         <td style="width:14%"><img style="width:150px; height:150px;" src="../../assets/images/packages/<?php echo $row['image'];?>" /></td>
         <td style="width:14%"><?php echo $row['no_of_days'];?></td>
         <td style="width:14%"><?php echo $row['no_of_nights'];?></td>
         <td style="width:30%"><?php echo $row['package_cost'];?></td>
         <td style="width:11%">
        </td>
            </td>         
         <td style="width:12%">
         <button id="<?php echo $row['id'];?>" type="button" class="btn btn-primary btnEditPackage" data-toggle="modal"  data-target="#editPackage">
                      Edit
                </button>
                <br>
                <button  id="<?php echo $row['id'];?>"  class="btn btn-danger btnDeletepackage" onclick="confirm('Are you sure you want to delete this package')" value="<?php echo $row['id'];?>" id="btnDelete">Delete</button>
                <br>
                <a href="manage_package_description.php?p_id=<?php echo $row['id'];?>&p_name=<?php echo $row['package_name']?>" class="btn btn-warning ">
                      Assign
                </a>
         </td>
         <td> 

            </td>
</tr><?php }?>

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
    </div>
</div>











<?php require_once('../includes/footer.php');
?>






<div class="modal fade" id="editPackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Package Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmeditPackage" method="post" style="width: 475px;">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name1">Package Name</label> <input class="form-control" id="package_name1" name="package_name" placeholder="Package Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Package Type</label> 
                                    <select style="color:black" class="form-control" id="package_type1" type="text" name="package_type">
                                        <option>Choose Package Type</option>
                                        <?php
                                            $get_type = "SELECT * FROM tbl_package_type";
                                            $run_type = mysqli_query($dbcon, $get_type);
                                            while ($row = mysqli_fetch_assoc($run_type)) {
                                        ?>
                                            <option value="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                                <div class="form-row">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input id="imageModal" name="imageModal" type="file" class="image" />
                                        </div>
                                    </div>
                                </div>
                            <div class="row-row">
                                <img id="myImage1" style="width:150px; height:150px;"/>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="number">No of Days</label> <input class="form-control" id="no_of_days1" name="no_of_days" placeholder="No of Days" type="number">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="number"></label>No of Nights <input class="form-control" id="no_of_nights1" readonly placeholder="No of Nights" type="number" name="no_of_nights">
                                </div>
                            </div>
                                

                            <div class="form-group col-md-12">
                                    <label for="number"></label>Package cost <input class="form-control" id="package_cost1" placeholder="Package cost " type="number" name="package_cost">
                            </div>
                              
                                <input type="hidden" name="filename" value="update_package" id="update_Package" />

                                <input type="hidden" name="package_id" id="package_id" />
                                

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="btn_update_package_details" type="submit">update Package</button>
            </div>
        </form> 
            
        </div>
        </div>
    </div>
  </div>



