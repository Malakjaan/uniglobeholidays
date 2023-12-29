    <?php
        $id = $_GET['user_id'];
        require_once('../config/connection.php');
        $query ="SELECT * FROM tbl_slider WHERE id = $id";
        $result = mysqli_query($dbcon, $query);
        $row = mysqli_fetch_assoc($result);
            
?>

<form method="POST" action="../routes/update_slider.php" enctype="multipart/form-data">
                            <div class="form-row">
                            <div class="row"><div class="form-group col-md-4">
                                    <label for="inputEmail">slider_headline</label> <input class="form-control" id="name" name="name" placeholder="slider_headline" type="text">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail">slider_tagline</label> <input class="form-control" id="email" placeholder="slider_tagline" type="email"></div>
                                </div>
                            </div>
                            <div class="row">

                            <input name="image" type="file" style="padding:10px; border-radius:6px" title="Choose Your file" />
                            <br>
                             <img src="../../assets/images/slider/<?php echo $row['image']?>" width:="100" height="100" />

                        </div>
                        <br>
                        <div class="form-group col-md-8">
                                <button class="btn btn-primary" id="btn_save_slider_details" type="submit">Submit slider</button>
                        </div>
                        </form>