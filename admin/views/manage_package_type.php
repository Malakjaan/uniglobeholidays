<?php 
require_once('../../config/connection.php');
require_once('../includes/header.php'); ?>


    <div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add Package type Here </h2>
                        <form style="width:720px; color: black" enctype="multipart/form-data"method="post" id="frmPackage">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">PackageType</label> <input class="form-control" id="package_name" name="package_name" placeholder="Package Name" type="text">
                                </div></div>
                            </div>
                            
                                

                            <input type="hidden" name="filename" value="insert_package" />
                            <div class="form-group" >
                            
                                <button class="btn btn-primary" id="btn_save_package_details" type="submit"  name="submit">Submit</button>
                                </div>
                                
                        </form>
                    </div>
                </div>
    


<br>


<div class="row" STYLE="POSITION: relative; TOP: 230px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View Package type </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Package Type</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        require_once('../../config/connection.php');
        $query ="SELECT * FROM tbl_package_type";
        $result = mysqli_query($dbcon, $query);  
        while ($row = mysqli_fetch_assoc($result)) {    
       ?>
       <tr>

         <td style="width:5%" ><?php echo $row['id'];?></td>
         <td style="width:14%"><?php echo $row['package_type'];?></td>
         
                    
         <td style="width:12%">
                <button data-id="<?php echo $row['id'];?>" id="btnEditPackagetype" type="button" class="btn btn-primary btnEditPackagetype" data-toggle="modal" data-target="#editPackagetype">
                      Edit
                </button>
                <br>
                <button  data-id="<?php echo $row['id'];?>"  onclick="confirm('Are you sure you want to delete this feedback')" style="padding:10px;text-decoration:none; background:red; color:white; border-radius:6px; font-size:12px; font-weight:bold" id="btnDelete">Delete</a>
                </td>
         <td> 

            </td>
</tr><?php }?>

                            </tbody>
                        </table>

                
                    </div></div></div>


<?php require_once('../includes/footer.php');
?>






      <div class="modal fade" id="editPackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Package type Details</h5>
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
                               
                   
                                <div class="form-group col-md-8">
                                
                                </div>
                                <input type="hidden" name="filename" value="" />
                                <input type="hidden" name="Packagetype_id" id="Packagetype_id" />
                                </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="btn_update_packagetype_details" type="submit">update Package Type</button>
      
        </form> </div>
    </div>
  </div>
</div>


