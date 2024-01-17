<?php require_once('../includes/header.php'); ?>

    <div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Blogs </h2>
                        <form style="width:720px;" enctype="multipart/form-data" id="frmblog">
                            <div class="form-row">
                            <div class="row">
                                <div class="form-group col-md-11">
                                    <label for="inputtext"> title</label> <input class="form-control" id="blog_title" name="blog_title" placeholder="Blog title" type="text">
                                </div>
                             <div class="row">
                                
                            <div class="form-group col-md-12">
                                <label for="inputlocation">Blog description</label> <textarea class="form-control" id="blog_description" name="blog_description" placeholder="Blog Description"></textarea>
                            </div>
                            </div>
                        <div class="row">
                                <div class="form-group col-md-12">
                                <label for="inputAddress">Choose Blog Image</label> <input class="form-control" id="blog_image" name="blog_image" type="file" />
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group">
                                <label for="inputAddress2" style="color: black">blog Status</label> <br>
                                <input type="radio" checked name="blog_status" value="1" id="blog_active" type="text"> <label for="inputAddress2" style="color: black">Active</label> 
                                <input type="radio" value="0" name="blog_status" id="blog_inactive" type="text"><label for="inputAddress2" style="color: black">In-Active</label> 
                            </div>
                        </div>
                        <br>
                        <div class="form-group col-md-8">
                                <button class="btn btn-primary" id="btn_save_blog" type="submit">Add blog</button>
                        </div>
                        </form>

           <div class="row" STYLE="POSITION: relative; TOP: 30px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View blogs </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Blog Title</th>
                                <th scope="col">Blog Descripton</th>
                                <th scope="col">Blog image</th>
                                <th scope="col">Blog_status</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>             <br>
         <?php
        require_once('../../config/connection.php');
        $query ="SELECT * FROM tbl_blog";
        $result = mysqli_query($dbcon, $query);  //performs a query against database
        while ($row = mysqli_fetch_assoc($result)) {     //fetch result row as an associate array
       ?>
       <tr>

         <td style="width:5%" ><?php echo $row['id'];?></td>
         <td style="width:15%"><?php echo $row['blog_title'];?></td>
         <td style="width:14%"><?php echo $row['blog_description'];?></td>
         <td style="width:14%"><img style="width:150px; height:150px;" src="../../assets/images/packages/<?php echo $row['blog_image'];?>" /></td>
         <td style="width:11%">        
            <?php 
            
                if($row['blog_status'] ==0) {
                    echo "<span style='color: red;font-weight:bold'>In-Active</span>";
                } else {
                    echo "<span style='color: green; font-weight:bold'>Active</span>";
                }

            ?>
            </td>         
         <td style="width:14%">
         <?php
            if($row['blog_status'] ==0) {
         ?>
            <a href="?user_id=<?php echo $row['id'];?>&blog_status=1" name="btnedit" style="padding:10px;text-decoration:none; font-size:12px; font-weight:bold" class="btn btn-sm btn-success"> Activate </a>
            <?php } else { ?>
                <a href="?user_id=<?php echo $row['id'];?>&blog_status=0" name="btnedit" style="padding:10px;text-decoration:none; font-size:12px; font-weight:bold" class="btn btn-sm btn-danger"> In-Activate </a><br>
                <?php } ?>
                <br>
                <button id="<?php echo $row['id'];?>" type="button" class="btn btn-primary btnEditblog" data-toggle="modal" value="<?php echo $row['id'];?>" data-target="#edit_blog">
                      Edit
                </button>
                <br>
                <button  id="<?php echo $row['id'];?>"  class="btn btn-danger btnDeleteblog" onclick="confirm('Are you sure you want to delete this blog')" value="<?php echo $row['id'];?>" id="btnDelete" data-target="delete_blog">Delete</a>
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

<?php 
    if(isset($_GET['user_id'])) {
        $blog_id = $_GET['user_id'];
        $blog_status = $_GET['blog_status'];
        $query = "UPDATE tbl_blog SET blog_status = $blog_status WHERE id = '$blog_id'";
        $result = mysqli_query($dbcon, $query);
        $msg = "";
        if($blog_status == 1) {
            $msg = "blog_status Approved";
        } else {
            $msg = "blog_status Dis-Approved";
        }
        
        if($result) {
            echo "<script> alert('". $msg ."'); window.location.href = 'manage_blog.php'</script>";
        } else {
            echo "<script>alert('Error Occured'); window.location.href = 'manage_blog.php'</script>";
        }
    }
?>




<?php require_once('../includes/footer.php'); ?>

<!-- Modal -->
<div class="modal fade" id="edit_blog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Blog Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmeditblog" method="post" style="width: 475px;">
                            <div class="row">
                                <div class="form-group col-md-11">
                                    <label for="inputtext"> title</label> <input class="form-control" id="blog_title1" name="blog_title1" placeholder="Blog title" type="text">
                                </div>
                             <div class="row">
                                
                            <div class="form-group col-md-12">
                                <label for="inputlocation">Blog description</label> <textarea class="form-control" id="blog_description1" name="blog_description1" placeholder="Blog Description"></textarea>
                            </div>
                            </div>
                        <div class="row">
                                <div class="form-group col-md-12">
                                <label for="inputAddress">Choose Blog Image</label> <input class="image" id="blog_image1" name="blog_image1" type="file" />
                            </div>
                        </div>
                        <div class="row">
                                <img id="myImage" style="width:150px; height:150px;"/>
                            </div>
                            <div>
                            <input type="hidden" name="filename" value="update_blog" id="update_blog" />
                        <input type="hidden" name="blog_id" id="blog_id" />
                        

                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="btn_update_blog_details" type="submit">update Blog</button>

        </form>

      </div>
    </div>
  </div>
</div>

                      



<?php require_once('../includes/footer.php'); ?>
<script>
    
   







</script>