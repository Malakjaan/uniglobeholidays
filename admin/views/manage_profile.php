<?php 
require_once('../../config/connection.php');
require_once('../includes/header.php'); ?>


    <div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-8">
                    <div class="heading">
                        <h2 style="color: black"> Manage Your Profile Here </h2>
                        <form style="width:720px; color: black" enctype="multipart/form-data"method="post" id="frmProfile">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">Package Name</label> <input class="form-control" id="name" name="name" value="<?=$_SESSION['name'];?>" placeholder="Your Name" type="text">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="username">Username</label> 
                                    <input type="text" value="<?=$_SESSION['username'];?>" style="color:black" class="form-control" id="username" type="text" name="username" placeholder="Your Username"/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="email">Your EMail</label> <input class="form-control" id="email" name="email" value="<?=$_SESSION['email'];?>" placeholder="Your Email" type="email">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="number">Password</label> <input class="form-control" id="password" placeholder="**********" type="text" name="password" value="<?=$_SESSION['password'];?>" />
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-4">
                                    <label for="email">Choose Profile Picture</label>  <input type="file" name="profile_image" id="profile_image" class="btnchangeprofile" class="form-control" />
                                </div>
                            </div>

                            <input type="hidden" name="filename" value="insert_profile" />
                            <div class="form-group">
                            
                               
                                </div>
                                
                                <style>
                                    label {
                                        color:black;
                                    }
                                    </style>

                       
                    </div>
                </div>
                <div class="col-md-4">
                <div class="form-group col-md-4">
                        <img id="image"  src="../../assets/images/owner/<?=$_SESSION['photo'];?>" style="    position: relative;
                                                    top: 63px;
                                                    width: 206px;
                                                    border-radius: 131px;
                                                    right: 86px;"/>
                    </div>
                    
                </div>
                <div class="form-group col-md-4" >
                                    <button class="btn btn-primary col-md-12" id="submit" type="submit"  name="submit">Submit</button>
                                </div>
                </form>
        </div>

    
  <?php require_once('../includes/footer.php'); ?>

  <div class="row" STYLE="POSITION: relative; TOP: 30px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View Profile Details... </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        $query ="SELECT * FROM tbl_login";
        $result = mysqli_query($dbcon, $query);  
        while ($row = mysqli_fetch_assoc($result)) {   
       ?>
       <tr>

         <td style="width:5%" ><?php echo $row['id'];?></td>
         <td style="width:15%"><?php echo $row['name'];?></td>
         <td style="width:14%"><?php echo $row['username'];?></td>
         <td style="width:14%"><?php echo $row['email'];?></td>
         <td style="width:14%"><?php echo $row['pwd'];?></td>
         <td style="width:14%"><img style="width:150px; height:150px;" src="../../assets/images/owner/<?php echo $row['image'];?>" /></td>
         <td style="width:14%">
                <br>
                <button id="<?php echo $row['id'];?>" type="button" class="btn btn-primary btnEditProfile" data-toggle="modal" value="<?php echo $row['id'];?>" data-target="#editprofile">
                      Edit
                </button>
                <br>
                <button  id="<?php echo $row['id'];?>"  class="btn btn-danger btnDeleteProfile" onclick="confirm('Are you sure you want to delete this Profile')" value="<?php echo $row['id'];?>" id="btnDelete" data-target="btnDeleteProfile">Delete</a>
         </td>
         <td> 

            </td>
</tr><?php }?>

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
<div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile info here...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmeditprofile" method="post" style="width: 475px;">
      <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">Package Name</label> <input class="form-control" id="name1" name="name1" value="<?=$_SESSION['name'];?>" placeholder="Your Name" type="text">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="username">Username</label> 
                                    <input type="text" value="<?=$_SESSION['username'];?>" style="color:black" class="form-control" id="username1" type="text" name="username1" placeholder="Your Username"/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="email">Your EMail</label> <input class="form-control" id="email1" name="email1" value="<?=$_SESSION['email'];?>" placeholder="Your Email" type="email">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="number">Password</label> <input class="form-control" id="password1" placeholder="**********" type="text" name="password1" value="<?=$_SESSION['password'];?>" />
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-4">
                                    <label for="email">Choose Profile Picture</label>  <input type="file" name="profile_image1" id="profile_image1" class="btnchangeprofile" class="form-control" />
                                </div>
                                <div class="form-group col-md-4">
                            <div class="row">
                                <img id="myImage" style="width:120px; height:120px;"/>
                            </div>
    
                        <input type="hidden" name="profile_id" id="profile_id" />
                        <input type="hidden" name="filename" value="update_profile" id="update_profile" />

                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="btn_update_profile_details" type="submit">update profile</button>

        </form>

      </div>
    </div>
  </div>
</div>

                      




