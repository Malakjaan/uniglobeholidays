<?php 
require_once('../../config/connection.php');
require_once('../includes/header.php'); ?>

<div class="row" STYLE="POSITION: absolute;TOP: 60PX;">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 style="color: black"> Add New Slider Here </h2>
                        <form style="width:720px; color: black">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Slider Headline</label> <input class="form-control" id="slider_headline" name="slider_headline" placeholder="Slider Headline" type="email">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Slider Tagline </label> <input class="form-control" id="slider_tagline" placeholder="Slider Tagline" type="text" name="slider_tagline">
                                 </div></div></div></div><div>
                                  die("unable");
                                 <br>
                            <div class="file-upload text-secondary"style="color:black">
                            <style>
                                .file-upload input{position: absolute;top: 0;left: 0; height: 100%;width: 100%;cursor: pointer;opacity: 0; color: black;}
                            </style>
                                <label for="inputAddress" style="color:black">Choose Slider Image</label> <input type="file" class="image" id="image" name="image" type="file" accept="image/*"/>
                                <span class="fs-4 fw-2"style="color:black">Choose file...</span>
                                <span style="color:black">or drag and drop file here</span>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputAddress2" style="color: black">Slider Status</label> <br>
                                <input type="radio" checked name="slider_status" id="slider_active" type="text"> <label for="inputAddress2" style="color: black">Active</label> 
                                <input type="radio" name="slider_status" id="slider_inactive" type="text"><label for="inputAddress2" style="color: black">In-Active</label> 
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary me-1" id="inputBtn">submit</button>
                                </div>
                                
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
<script>
  $("#insertForm").on("submit",function(e)){
    $("insertBtn").attr("disabled","disabled");
    e.preventDefault();
    $.ajax({
        url:"server.php?action=insertData",type:"POST",data: new FormData(this),
        contentType:false,processData:false,success:function(response){
            var response=JSON.parse(response);
        }
    })
  }
</script>




<?php require_once('../includes/footer.php');
?>


