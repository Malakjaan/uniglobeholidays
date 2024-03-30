<?php 
	include('resources/header.php'); 
	$pid = base64_decode($_GET['pid']);
	$get_data = "SELECT * FROM tbl_package WHERE id = $pid";
	$run_data = mysqli_query($dbcon, $get_data);
	$row_data = mysqli_fetch_assoc($run_data);
?>
<div class="container-fluid no-padding popular-destination2-section">
			<div class="section-padding"></div>	
				<div class="container">
					<div class="section-header">
						<h3>popular Destination</h3>
						<span>We're gonna make our dreams come true</span>
					</div>
				</div>
				<div class="container-fluid no-padding popular-destination2-block">
					<ul id="popular-destination2-carousel">

					<!-- Loop Starts Here  -->
					<?php
        $get_package = "SELECT * FROM tbl_package ";
        $run_package = mysqli_query($dbcon, $get_package);
        while( $row_package = mysqli_fetch_array($run_package) ) {

			
			$get_package1 = "Select * FROM tbl_package WHERE package_name LIKE %query% OR no_of_days LIKE %query% OR no_of_nights LIKE %query% ";
			$get_package1 = mysqli_query($dbcon, $get_package1);
			$row_get_package1 = mysqli_fetch_array($run_get_package1);

            if($sno == 1 ) {
                $active = 'active';
            } else {
                $active = '';
            }
    ?>
						<li data-thumb = "assets/images/packages/<?php echo $row_package['image'];?>">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>
												<?php echo $row_package['package_name'];?></h3>
											<p>Packaging can be theater, it can create a story...  </p>
											<ul>
												<li>Type:<img src="images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24"> 
												<?php echo @$row_package_type['name'];?></li>
												<li>Days:<img src="images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24"><?php echo $row_package['no_of_days'];?></li>
												<li>Nights:<img src="images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27"><?php echo $row_package['no_of_nights'];?></li>
												<li>Cost:<img src="images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28"><?php echo $row_package['package_cost'];?></li>
											</ul>
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
										<img src="assets/images/packages/<?php echo $row_package['image'];?>"
											alt="popular-destination2_thumb_main-1" class="img1"width="672" height="480"/>
										</div>
									</div>
								</div>	
							</div>
						</li>
						<?php $sno++;} ?>

					</ul>
				</div>
			<div class="section-padding"></div>
		</div><!-- Popular Destination 2 /- -->
		<?php include('resources/footer.php'); ?>