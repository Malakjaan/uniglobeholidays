<?php require_once('../includes/header.php'); ?>

    
<div class="row" STYLE="POSITION: relative; TOP: 30px;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> View Contact Details </h2>
                        <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Primary Email</th>
                                <th scope="col">Secondary Email</th>
                                <th scope="col">Head office</th>
                                <th scope="col">Branch office</th>
                                <th scope="col">Primary Contact</th>
                                <th scope="col">Secondary Contact</th>
                                <th scope="col">Action </th>
                                </tr>
                            </thead>
        <tbody><?php
        require_once('../../config/connection.php');
        $query ="SELECT * FROM tbl_contact";
        $result = mysqli_query($dbcon, $query);  //performs a query against database
        while ($row = mysqli_fetch_assoc($result)) {     //fetch result row as an associate array
       ?>
       <tr>

         <td style="width:5%" ><?php echo $row['id'];?></td>
         <td style="width:15%"><?php echo $row['pemail'];?></td>
         <td style="width:14%"><?php echo $row['semail'];?></td>
         <td style="width:14%"><?php echo $row['paddress'];?></td>
         <td style="width:14%"><?php echo $row['saddress'];?></td>
         <td style="width:14%"><?php echo $row['pcontact'];?></td>
         <td style="width:14%"><?php echo $row['scontact'];?></td>
               
         <td style="width:12%"> 
                <button id="<?php echo $row['id'];?>" type="button" class="btn btn-primary btnEditcontact" data-toggle="modal" value="<?php echo $row['id'];?>" data-target="#editcontact">
                      Edit
                </button>
                <br>
                <button  id="<?php echo $row['id'];?>"  class="btn btn-danger btnDeletecontact" onclick="confirm('Are you sure you want to delete this contact')" value="<?php echo $row['id'];?>" id="btnDelete" data-target="btnDeletecontact">Delete</a>
         </td>
         <td> 

            </td>
</tr><?php }?>

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
                   




<?php require_once('../includes/footer.php'); ?>

<!-- Modal -->
<div class="modal fade" id="editcontact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit contact Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmeditcontact" method="post" style="width: 475px;">
      <form style="width:720px;">
                            <div class="form-row">
                            <div class="form-group col-md-4">
                                    <label for="inputEmail">Primary Email</label> <input class="form-control" id="pemail" name="email" placeholder="Primary Email" type="email">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail">Secondary Email</label> <input class="form-control" id="semail" placeholder="Secondary Email" type="text"></div>
                                </div>
                            
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label for="inputAddress">Head Office</label> <textarea class="form-control" id="iaddress" placeholder="Head Office"></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Branch Office</label> <textarea class="form-control" id="naddress" placeholder="Branch Office" type="text"></textarea>
                                </div></div>
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                    <label for="inputContact">Primary Contact</label> <input class="form-control" id="pcontact" type="number" placeholder="Primary Contact">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputContact">Secondary Contact</label> 
                                    <input class="form-control" id="scontact" type="number" placeholder="Secondary Contact"></div>
                                
                            </div>
                                   <input type="hidden" name="filename" value="update_contact" id="update_contact" />

                                    <input type="hidden" name="contact_id" id="contact_id" />


                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" id="btn_update_contact_details" type="submit">update contact</button>
</div>
                        </form> 
                        </div>
      </div>
    </div>
  </div>


                      





