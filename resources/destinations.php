<!-- Popular Destination -->
<div class="container popular-destination popular-destination_v2">
			<div class="section-padding"></div>
			<div class="section-header">
				<h3>holiday best Destination</h3>
				<span>We're gonna make our dreams come true</span>
			</div>
			<div class="popular-destination-block">
				<div class="row">
                    <?php
                        $get_dest = "SELECT * FROM tbl_destination";
                        $run_dest = mysqli_query($dbcon, $get_dest);
                        $sno = 1;
                        $leftright = '';
                        while($row_dest = mysqli_fetch_array($run_dest)) {
                            if($sno == 1) {
                                $leftright = 'left';
                    ?>
					<div class="col-md-6 popular-destination-<?=$leftright?>">
						<div class="popular-destinatonbox">
							<img src="assets/images/destinations/<?=$row_dest['image']?>" alt="populardestinaion1-wide"  style="height:390px;"/>
							<div class="popular-destination-info">
								<a href="destination-details.html" title="Port Jackson"><h3><?=$row_dest['destination_name']?></h3></a>
								<span><?=$row_dest['destination_location']?></span>
								<span class="amount">₹355</span>
							</div>
						</div>
					</div>
                    <?php } else { if( $sno == 2) { 
                                $leftright = 'right';
                            ?>
					    <div class="col-md-6 popular-destination-<?=$leftright?>">
                    <?php  }?>
						<div class="col-md-6 col-sm-6 col-xs-6 no-padding">
                            <div class="popular-destinatonbox">
                                <img src="assets/images/destinations/<?=$row_dest['image']?>" style="height:190px; width:290px;" alt="populardestinaion1-wide" />
                                <div class="popular-destination-info">
                                    <a href="destination-details.html" title="Port Jackson"><h3><?=$row_dest['destination_name']?></h3></a>
                                    <span><?=$row_dest['destination_location']?></span>
                                    <span class="amount">₹355</span>
                                </div>
                            </div>
						</div>		
                        <?php } ?>			
                    <?php  $sno++; } ?>
                    </div>
				</div>			
			</div>	
			<div class="section-padding"></div>
		</div><!-- Popular Destination /- -->