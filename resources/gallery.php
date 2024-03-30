
		<!-- Gallery Section -->
		<div class="container gallery-section">
			<div class="section-padding"></div>
				<div class="section-header">
					<h3>our holiday gallery</h3>
					<span>We're gonna make our dreams come true</span>
				</div>	

				<ul class="portfolio-list">
				<?php
                        $get_gallery = "SELECT * FROM tbl_gallery";
                        $run_gallery = mysqli_query($dbcon, $get_gallery);
                        $sno = 1;
						$height = 0;
						$flag = 0;
                        while($row_gallery = mysqli_fetch_array($run_gallery)) {
							
                            if($sno % 2 == 0) {
								$height = 410;
							} else {
								$height = 280;
							}

							if($sno == 5) {
								$height = 410;
								$flag = 1;
							}

 
                    ?>
					<li class="col-md-3 col-sm-4 col-xs-4">
						<div class="content-image-block">
							<a href="index-2.html#">
								<img src="assets/images/packages/<?php echo $row_gallery['image'];?>" alt="gallery" width="270" style="height:<?=$height;?>px!important" />
								</a>
							<div class="content-block-icon">
								<a href="assets/images/packages/<?php echo $row_gallery['image'];?>" class="gallery-popup"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</li>
					<?php  $sno++; } ?>
				</ul>
			<div class="section-padding"></div>
		</div><!-- Gallery Section /- -->