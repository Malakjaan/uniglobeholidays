<?php 

if(!isset($_GET['p_id'])) {
    echo "Not Found";
} 

$p_id = $_GET['p_id'];
$p_name = $_GET['p_name'];

require_once('../../config/connection.php');
require_once('../includes/header.php'); ?>


    <div class="row"   STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add Package Description Details Here </h2>
                        <form style="width:720px; color: black" enctype="multipart/form-data"method="post" id="frmeditdescription">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Package Name</label> <input class="form-control" id="package_name" value="<?php echo $p_name;?>" readonly name="package_name" placeholder="Package Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Package Type</label> 
                                    <select style="color:black" class="form-control" id="day_number" type="text" name="day_number">
                                        <option>Choose Day Number</option>
                                        <?php
                                            $get_type = "SELECT day_no FROM tbl_package_desc WHERE p_id = $p_id AND is_filled = 0";
                                            $run_type = mysqli_query($dbcon, $get_type);
                                            while ($row = mysqli_fetch_assoc($run_type)) {
                                        ?>
                                            <option style="color: black" value="<?php echo $row['day_no']?>"><?php echo $row['day_no']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="number">Day Title</label> <input class="form-control" id="day_title" name="day_title" placeholder="Day Title" />
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="number"></label>Day Description <textarea class="form-control" id="day_desc" placeholder="Day Description " name="day_desc"></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="filename" value="update_package_description" />
                            <input type="hidden" name="p_id" value="<?php echo $p_id?>" />

                            <div class="form-group" >
                                <button class="btn btn-primary" id="btn_update_package_description" type="submit"  name="submit">Update Package Desciprtion</button>
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
                                <th scope="col">Day title</th>
                                <th scope="col">Day Number</th>
                                <th scope="col">Day Description</th>
                                <!-- <th scope="col">is filled</th> -->
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        require_once('../../config/connection.php');
        $query ="SELECT * FROM tbl_package_desc WHERE p_id = $p_id";
        $result = mysqli_query($dbcon, $query);  
        while ($row = mysqli_fetch_assoc($result)) {    
       ?>
       <tr>


        <td style="width:4%" ><?php echo $row['id'];?></td>                 
         <td style="width:10%" ><?php echo $p_name;?></td>         
         <td style="width:15%"><?php echo $row['day_title'];?></td>
         <td style="width:5%"><?php echo $row['day_no'];?></td>
         <td style="width:25%"><?php echo $row['day_desc'];?></td>
         <!-- <td style="width:10%"><?php echo $row['is_filled'];?></td> -->
         <td style="width:11%">
         <button id="<?php echo $row['id'];?>" type="button" class="btn btn-primary btnedit_package_desc" data-toggle="modal"  data-target="#edit_package_desc_button">
                      Edit
                </button>
                <br>
                <button  id="<?php echo $row['id'];?>"  class="btn btn-danger btnDeletedesc" onclick="confirm('Are you sure you want to delete this package Description')" value="<?php echo $row['id'];?>" id="btnDelete" data-target="btnDeletedesc">Delete</button>
         </td>
    </tr>
<?php }?>

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
                    </div>











<?php require_once('../includes/footer.php');
?>






<div class="modal fade" id="edit_package_desc_button" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Package Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form style="width:720px; color: black" enctype="multipart/form-data"method="post" id="frmeditdescriptionbutton">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="name">Package Name</label> <input class="form-control" id="package_name" value="<?php echo $p_name;?>" readonly name="package_name" placeholder="Package Name" type="text">
                                </div>                                
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="number">Day Title</label> <input class="form-control" id="day_title1" name="day_title" placeholder="Day Title" />
                                </div></div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="number"></label>Day Description <textarea class="form-control" id="day_desc1" placeholder="Day Description " name="day_desc"></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="filename" value="update_package_description_button" />
                            <input type="hidden" name="p_id" value="<?php echo $p_id?>" />
                            <input type="hidden" name="p_d_id" id="p_d_id" />


                            <div class="form-group" >
                                <button class="btn btn-primary" id="btn_update_package_description" type="submit"  name="submit">Update Package Desciprtion Details</button>
                                </div>
                                
                        </form>
            
        </div>
        </div>
    </div>
  </div>



