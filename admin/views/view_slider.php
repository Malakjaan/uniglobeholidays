<?php require_once('../includes/header.php'); ?>

    
<div class="row" STYLE="POSITION: relative; TOP: 30px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View Slider Details </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">slider_headline</th>
                                <th scope="col">slider_tagline</th>
                                <th scope="col">image</th>
                                <th scope="col">slider_status</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        require_once('../../config/connection.php');
        $query ="SELECT * FROM tbl_slider";
        $result = mysqli_query($dbcon, $query);  //performs a query against database
        while ($row = mysqli_fetch_assoc($result)) {     //fetch result row as an associate array
       ?>
       <tr>

         <td style="width:5%" ><?php echo $row['id'];?></td>
         <td style="width:15%"><?php echo $row['slider_headline'];?></td>
         <td style="width:14%"><?php echo $row['slider_tagline'];?></td>
         <td style="width:14%"><img style="width:150px; height:150px;" src="../../assets/images/slider/<?php echo $row['image'];?>" /></td>
         <td style="width:11%">        
            <?php 
            
                if($row['slider_status'] ==0) {
                    echo "<span style='color: red;font-weight:bold'>In-Active</span>";
                } else {
                    echo "<span style='color: green; font-weight:bold'>Active</span>";
                }

            ?>
            </td>         
         <td style="width:14%">
         <?php
            if($row['slider_status'] ==0) {
         ?>
            <a href="?user_id=<?php echo $row['id'];?>&slider_status=1" name="btnedit" style="padding:10px;text-decoration:none; font-size:12px; font-weight:bold" class="btn btn-sm btn-success"> Activate </a>
            <?php } else { ?>
                <a href="?user_id=<?php echo $row['id'];?>&slider_status=0" name="btnedit" style="padding:10px;text-decoration:none; font-size:12px; font-weight:bold" class="btn btn-sm btn-danger"> In-Activate </a><br>
                <?php } ?>
                <br>
                <button id="<?php echo $row['id'];?>" type="button" class="btn btn-primary btnEditSlider" data-toggle="modal" value="<?php echo $row['id'];?>" data-target="#editslider">
                      Edit
                </button>
                <br>
                <button  data-id="<?php echo $row['id'];?>"  onclick="confirm('Are you sure you want to delete this Slider')" style="padding:10px;text-decoration:none; background:red; color:white; border-radius:6px; font-size:12px; font-weight:bold" id="btnDelete">Delete</a>
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


<?php 
    if(isset($_GET['user_id'])) {
        $slider_id = $_GET['user_id'];
        $slider_status = $_GET['slider_status'];
        $query = "UPDATE tbl_slider SET slider_status = $slider_status WHERE id = '$slider_id'";
        $result = mysqli_query($dbcon, $query);
        $msg = "";
        if($slider_status == 1) {
            $msg = "slider_status Approved";
        } else {
            $msg = "slider_status Dis-Approved";
        }
        
        if($result) {
            echo "<script> alert('". $msg ."'); window.location.href = 'view_slider.php'</script>";
        } else {
            echo "<script>alert('Error Occured'); window.location.href = 'view_slider.php'</script>";
        }
    }
?>




<?php require_once('../includes/footer.php'); ?>

<!-- Modal -->
<div class="modal fade" id="editslider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Slider Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmeditslider" method="post" style="width: 475px;">
                            <div class="form-row">
                            <div class="row"><div class="form-group col-md-12">
                                    <label for="usr">Slider Headline</label> <input class="form-control" id="slider_headline" name="s_headline" placeholder="slider_headline" type="text">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail">Slider Tagline</label> <input class="form-control" name="s_tagline" id="slider_tagline" placeholder="slider_tagline" type="text"></div>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="row">
                                    <div class="form-group col-md-12">
                                        <input id="slider_image" name="s_image" type="file" class="slider_image" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <img id="myImage" style="width:150px; height:150px;"/>
                            </div>
                        <br>
                        <input type="hidden" name="slider_id" id="slider_id" />
                        <input type="hidden" name="filename" value="update_slider" id="update_slider" />

                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="btn_update_slider_details" type="submit">update slider</button>

        </form>

      </div>
    </div>
  </div>
</div>

                      