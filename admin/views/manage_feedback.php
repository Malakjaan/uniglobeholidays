<?php require_once('../includes/header.php'); ?>

    <div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Submit Your Feedback </h2>
                        <form style="width:720px;">
                            <div class="form-row">
                            <div class="row"><div class="form-group col-md-4">
                                    <label for="inputEmail">Name</label> <input class="form-control" id="name" name="name" placeholder="Your Name" type="text">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail">Your Email</label> <input class="form-control" id="email" placeholder="Your Email" type="email"></div>
                                </div>
                            </div>
                            <div class="row">
                                
                            <div class="form-group col-md-8">
                                <label for="inputAddress">comment</label> <textarea class="form-control" id="comment" placeholder="Your Comment" type="text"></textarea>
                            </div>
                            </div>
                            <div class="row">

                            <div class="form-group col-md-8">
                                    <label for="inputContact">Your Rating</label>
                                    <select name="rating" id="rating" class="form-control" >
                                        <option value="1"> 1 Star </option>
                                        <option value="2"> 2 Star</option>
                                        <option value="3"> 3 Star</option>
                                        <option value="4"> 4 Star</option>
                                        <option value="5"> 5 Star</option>
                                    </select> 
                            </div>
                        </div>
                        <br>
                        <div class="form-group col-md-8">
                                <button class="btn btn-primary" id="btn_save_feedback_details" type="submit">Submit Feedback</button>
                        </div>
                        </form>

                        <br>
    
            <div class="row" STYLE="POSITION: relative; TOP: 30px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View Client Feedback Details </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        require_once('../../config/connection.php');
        $query ="SELECT * FROM tbl_feedback";
        $result = mysqli_query($dbcon, $query);  //performs a query against database
        while ($row = mysqli_fetch_assoc($result)) {     //fetch result row as an associate array
       ?>
       <tr>

         <td style="width:5%" ><?php echo $row['id'];?></td>
         <td style="width:15%"><?php echo $row['name'];?></td>
         <td style="width:14%"><?php echo $row['email'];?></td>
         <td style="width:30%; text-align: justify"><?php echo $row['comment'];?></td>
         <td style="width:11%">
            <?php   
                while($row['rating'] >0) {
                    echo '<i class="fa fa-star" style="color: yellow"></i>';
                    $row['rating']--;
                }
            ?>
        </td>
         <td style="width:11%">        
            <?php 
            
                if($row['status'] ==0) {
                    echo "<span style='color: red;font-weight:bold'>In-Active</span>";
                } else {
                    echo "<span style='color: green; font-weight:bold'>Active</span>";
                }

            ?>
            </td>         
         <td style="width:14%">
         <?php
            if($row['status'] ==0) {
         ?>
            <a href="?user_id=<?php echo $row['id'];?>&status=1" name="btnEdit" style="padding:10px;text-decoration:none; font-size:12px; font-weight:bold" class="btn btn-sm btn-success"> Activate </a>
            <?php } else { ?>
                <a href="?user_id=<?php echo $row['id'];?>&status=0" name="btnEdit" style="padding:10px;text-decoration:none; font-size:12px; font-weight:bold" class="btn btn-sm btn-danger"> In-Activate </a><br>
                <?php } ?>
                <br>
                <button id="<?php echo $row['id'];?>" type="button" class="btn btn-primary btnEditFeedback" data-toggle="modal" data-target="#editFeedback">
                      Edit
                </button>
                <br>
                <button  id="<?php echo $row['id'];?>"  class="btn btn-danger btnDeletefeedback" onclick="confirm('Are you sure you want to delete this Feedback')" value="<?php echo $row['id'];?>" id="btnDelete" data-target="btnDeletefeedback">Delete</a>
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
        $feedback_id = $_GET['user_id'];
        $status = $_GET['status'];
        $query = "UPDATE tbl_feedback SET status = $status WHERE id = '$feedback_id'";
        $result = mysqli_query($dbcon, $query);
        $msg = "";
        if($status == 1) {
            $msg = "Feedback Approved";
        } else {
            $msg = "Feedback Dis-Approved";
        }
        
        if($result) {
            echo "<script> alert('". $msg ."'); window.location.href = 'manage_feedback.php'</script>";
        } else {
            echo "<script>alert('Error Occured'); window.location.href = 'manage_feedback.php'</script>";
        }
    }
?>

<!-- Button trigger modal -->



<?php require_once('../includes/footer.php'); ?>

<!-- Modal -->
<div class="modal fade" id="editFeedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Feedback Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmEditFeedback" style="width:720px;">
                            <div class="form-row">
                            <div class="row"><div class="form-group col-md-6">
                                    <label for="usr">Name</label> <input class="form-control" id="name1" name="name" placeholder="Your Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail">Your Email</label> <input class="form-control" name="email" id="email1" placeholder="Your Email" type="email"></div>
                                </div>
                            </div>
                            <div class="row">
                                
                            <div class="form-group col-md-8">
                                <label for="comment">comment</label> <textarea class="form-control" id="comment1" placeholder="Your Comment" name="comment" type="text"></textarea>
                            </div>
                            </div>
                            <div class="row">

                            <div class="form-group col-md-8">
                                    <label for="sel1">Your Rating</label>
                                    <select name="rating" id="rating1" class="form-control" >
                                        <option value="1"> 1 Star </option>
                                        <option value="2"> 2 Star</option>
                                        <option value="3"> 3 Star</option>
                                        <option value="4"> 4 Star</option>
                                        <option value="5"> 5 Star</option>
                                    </select> 
                            </div>
                            
                        </div>
                        <br>
                        <div class="form-group col-md-8">
                                
                        </div>
                        <input type="hidden" name="filename" value="update_feedback" />
                        <input type="hidden" name="feedback_id" id="feedback_id" />
                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="btn_update_contact_details" type="submit">Update Feedback</button>

        </form>

      </div>
    </div>
  </div>
</div>
