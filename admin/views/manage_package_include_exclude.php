<?php 

if(!isset($_GET['p_id'])) {
    echo "Not Found";
} 

$p_id = $_GET['p_id'];
$p_name = $_GET['p_name'];

require_once('../../config/connection.php');
require_once('../includes/header.php'); ?>


    <div class="row" STYLE="POSITION: relative;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add Package Includes Excludes  Here </h2>
                        <form style="width:720px; color: black" enctype="multipart/form-data"method="post"  id="frmPackageDescription">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Package Name</label> <input class="form-control" id="package_name" value="<?php echo $p_name;?>" readonly name="package_name" placeholder="Package Name" type="text">

                                    <input type="hidden" name="p_id" value="<?php echo $p_id;?>" id="p_id" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Include / Exclude</label> 
                                    <select style="color:black" class="form-control" id="inc_exc" name="inc_exc">
                                        <option>Choose an Option</option>
                                            <option style="color: black" value="0"> Include </option>
                                            <option style="color: black" value="1"> Exclude </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <label for="inputAddress">Choose Package Image</label>  -->
                                <?php
                                    $get_incexc = "SELECT * FROM tbl_inc_exc";
                                    $run_incexc = mysqli_query($dbcon, $get_incexc);
                                    while($row_incexc = mysqli_fetch_array($run_incexc)) {
                                ?>
                                <input type="checkbox" value="<?php echo $row_incexc['id'];?>" name="incexc[]" id="inxexc" /> <span style="color: black"> <?php echo $row_incexc['title'];?> </span>
                                        <br />
                                <?php } ?>
                            </div>
                          
                            <input type="hidden" name="filename" value="insert_package" />
                            <div class="form-group" >
                            
                                <button class="btn btn-primary" style="display:none" id="btn_add_inc_exc" type="submit"  name="submit">
                                    <span id="myspan"> </span>
                                </button>
                                </div>
                                
                        </form>
                    </div>
                </div>
            

                </div>



                <div class="row" STYLE="POSITION: relative; TOP: 60px;">
                    <div class="col-md-12">

                        <div class="heading">
                            <h2 style="color: black"> Package Includes & Excludes </h2>
                        </div>


                        <div class="col-md-6">
                                    <ul>
                                        <h5 style="color: black">
                                                Includes 
                                        </h5>
                                        <?php
                                            $get_include = "SELECT * FROM tbl_assign_inc_exc WHERE p_id = '$p_id' AND is_inc_exc = 0";
                                            $run_include = mysqli_query($dbcon, $get_include);
                                            while($row_include = mysqli_fetch_assoc($run_include)) {

                                                $p_i_e = $row_include['p_i_e'];

                                                $get_inc_text = "SELECT * FROM tbl_inc_exc WHERE id = $p_i_e";
                                                $run_inc_text = mysqli_query($dbcon, $get_inc_text);
                                                $row_inc_exc = mysqli_fetch_assoc($run_inc_text);

                                        ?>
                                        <li style="color: black"> <?php echo $row_inc_exc['title'];?>
                                                <a href="?i_e_id=<?php echo $row_include['id'];?>&p_id=<?php echo $p_id?>&p_name=<?php echo $p_name?>"> Delete </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                            </div>

                            <div class="col-md-6">
                                    <ul>

                                        <h5 style="color: black">
                                                Excludes 
                                        </h5>
                                        <?php
                                            $get_include = "SELECT * FROM tbl_assign_inc_exc WHERE p_id = '$p_id' AND is_inc_exc = 1";
                                            $run_include = mysqli_query($dbcon, $get_include);
                                            while($row_include = mysqli_fetch_assoc($run_include)) {

                                                $p_i_e = $row_include['p_i_e'];

                                                $get_inc_text = "SELECT * FROM tbl_inc_exc WHERE id = $p_i_e";
                                                $run_inc_text = mysqli_query($dbcon, $get_inc_text);
                                                $row_inc_exc = mysqli_fetch_assoc($run_inc_text);

                                        ?>
                                       <li style="color: black"> <?php echo $row_inc_exc['title'];?>
                                                <a href="?i_e_id=<?php echo $row_include['id'];?>&p_id=<?php echo $p_id?>&p_name=<?php echo $p_name?>"> Delete </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                            </div>


                            <script>
        $(document).ready(function () {
            
            $('#includedContent').show();
            $('#excludedContent').hide();

            
            $('#includeButton').click(function () {
                $('#includedContent').show();
                $('#excludedContent').hide();
            });

            
            $('#excludeButton').click(function () {
                $('#includedContent').hide();
                $('#excludedContent').show();
            });
        });
    </script>







                    <?php
                        // if(isset($_GET['i_e_id'])) {
                        //     $id = $_GET['i_e_id'];
                        //     $p_id = $_GET['p_id'];
                        //     $p_name = $_GET['p_name'];
                        //     $del = "DELETE FROM tbl_assign_inc_exc WHERE id = $id";
                        //     $path = 'manage_package_include_exclude.php?p_id=' . $p_id . '&p_name=' . $p_name;

                        //     $run = mysqli_query($dbcon, $del);
                        //     if($run) {
                        //         echo "<script> 
                        //                     alert('Item removed from the inclusion list');
                        //                     window.open('_BLANK', '" + $path  +   "'); 
                        //                 </script>";
                        //     } else {
                        //         echo "<script> alert('Error Occured'); </script>";
                        //     }
                        // }
                        
                    ?>



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
                              
                                <input type="hidden" name="filename" value="update_Package_description" id="update_Package_description" />

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



