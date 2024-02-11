<?php 

require_once('../includes/header.php'); 

require_once('../../config/connection.php');
?>

    <div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add Hotels </h2>
                        <form style="width:720px;" enctype="multipart/form-data" id="frmhotel">
                            <div class="form-row">
                            <div class="row"><div class="form-group col-md-11">
                                    <label for="inputtext"> Hotel location</label> <input class="form-control" id="hotel_location" name="hotel_location" placeholder="Hotel location" type="text">
                                </div>

                        <div class="form-group col-md-8">
                                <button class="btn btn-primary" id="btn_save_hotel_details" type="submit">Add hotel</button>
                        </div>
                        </form>
