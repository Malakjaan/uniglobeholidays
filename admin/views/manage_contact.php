<?php require_once('../includes/header.php'); ?>

    <div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add The Contact Details </h2>
                        <form style="width:720px;">
                        <div class="form-row">
                           <div class="form-group col-md-4">
                                    <label for="inputEmail">Primary Email</label> <input class="form-control" id="pemail" name="pemail" placeholder="Primary Email" type="email">
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="inputEmail">Secondary Email</label> <input class="form-control" id="semail" placeholder="Secondary Email" type="text" name="semail" >
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputAddress">Head Office</label> <textarea class="form-control" id="iaddress" placeholder="Head Office" name="iaddress" ></textarea>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="inputAddress">Branch Office</label> <textarea class="form-control" id="saddress" placeholder="Branch Office" type="text" name="saddress" ></textarea>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="inputContact">Primary Contact</label> <input class="form-control" id="pcontact" type="number" placeholder="Primary Contact" name="pcontact" >
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="inputContact">Secondary Contact</label> 
                                    <input class="form-control" id="scontact" type="number" name="scontact" placeholder="Secondary Contact">
                            </div>
                        </div>
                            <div class="form-group">
                            </div>&nbsp;<br>
                                <button class="btn btn-primary" id="btn_save_contact_details" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
    




<?php require_once('../includes/footer.php'); ?>