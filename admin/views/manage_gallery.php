<?php 
require_once('../../config/connection.php');
require_once('../includes/header.php'); ?>


    <div class="row" STYLE="POSITION: relative;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add Your Gallery here... </h2>
                        <form style="width:720px; color: black" enctype="multipart/form-data"method="post" id="frmGallery">
                            <div class="form-group">
                                <label for="inputAddress"><h6 style="color:blue">Choose Gallery Image</h6></label> <input class="form-control" id="image" name="image" type="file" />
                            </div>
                            
                            </div>

                            <input type="hidden" name="filename" value="insert_gallery" />
                            <div class="form-group" >
                            
                                <button class="btn btn-primary" id="frmGallery" type="submit"  name="submit">Submit</button>
                                </div>
                                
                        </form>
                    </div>
                </div>
            




<div class="row" STYLE="POSITION: relative; TOP: 47px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View Gallery </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Gallery</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        require_once('../../config/connection.php');
        $query ="SELECT * FROM tbl_gallery";
        $result = mysqli_query($dbcon, $query);  
        while ($row = mysqli_fetch_assoc($result)) {    
       ?>
       <tr>

         <td style="width:5%" ><?php echo $row['id'];?></td>
         <td style="width:14%"><img style="width:150px; height:150px;" src="../../assets/images/packages/<?php echo $row['image'];?>" /></td>
         <td style="width:11%">
       
                   
                <button  id="<?php echo $row['id'];?>"  class="btn btn-danger btnDeletegallery" onclick="confirm('Are you sure you want to delete this photo from gallery')" value="<?php echo $row['id'];?>" id="btnDelete">Delete</button>
                </td> 
        
</tr><?php }?>

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
                    











<?php require_once('../includes/footer.php');?>








