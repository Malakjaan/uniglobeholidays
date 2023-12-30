<?php require_once('../includes/header.php'); ?>

<div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add contact Details Here </h2>
                        <form style="width:720px; color: black" enctype="multipart/form-data"method="post" id="frmcontact">
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
                            <input type="hidden" name="filename" value="insert_contact" />
                            <div class="form-group" >
                            
                                <button class="btn btn-primary" id="btn_save_contact_details" type="submit"  name="submit">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
           




<?php require_once('../includes/footer.php'); ?>