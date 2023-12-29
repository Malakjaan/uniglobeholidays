<?php 
require_once('../../config/connection.php');
require_once('../includes/header.php'); ?>


    <div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add New Slider Here </h2>
                        <form style="width:720px; color: black" enctype="multipart/form-data" id="frmSlider">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Slider Headline</label> <input class="form-control" id="slider_headline" name="slider_headline" placeholder="Slider Headline" type="email">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Slider Tagline </label> <input class="form-control" id="slider_tagline" placeholder="Slider Tagline" type="text" name="slider_tagline">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Choose Slider Image</label> <input class="form-control" id="slider_image" name="slider_image" type="file" />
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputAddress2" style="color: black">Slider Status</label> <br>
                                <input type="radio" checked name="slider_status" value="1" id="slider_active" type="text"> <label for="inputAddress2" style="color: black">Active</label> 
                                <input type="radio" value="0" name="slider_status" id="slider_inactive" type="text"><label for="inputAddress2" style="color: black">In-Active</label> 
                            </div>
                            <br>
                            <div class="form-group" >
                            
                                <button name="save_slider" class="btn btn-primary" id="btn_save_slider_details" type="submit">Submit</button>
                                </div>
                                
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php require_once('../includes/footer.php');



?>
