<div id="photoslider2-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">

    
    <?php
        $get_slider = "SELECT * FROM tbl_slider WHERE slider_status = 1";
        $run_slider = mysqli_query($dbcon, $get_slider);
        $sno =1;
        $active = '';
        while( $row_slider = mysqli_fetch_array($run_slider) ) {
            if($sno == 1 ) {
                $active = 'active';
            } else {
                $active = '';
            }
    ?>
        <div class="item <?php echo $active;?>">
            <img src="assets/images/slider/<?php echo $row_slider['image'];?>" alt="photoslider-1" width="1920" height="840"/>
            <div class="container photoslider2-content">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12 ">
                        <h3>
                            <?php echo $row_slider['slider_headline'];?>
                        </h3>
                        <p>
                            <?php echo $row_slider['slider_tagline'];?>
                        </p>
                        <a href="#" title="purchase now">Purchase now</a>
                    </div>
                </div>
            </div>
        </div>
        <?php $sno++;} ?>
    </div>
</div>		