<div class="container-fluid no-padding testimonial2-section">
			<div class="testimonial2-shape"></div>
			<div class="section-padding"></div>
			<div class="container">
				<div class="section-header">
					<h3>What our client says</h3>
				</div>
				<div class="row">
      
					<div class="col-md-8 col-sm-9 col-xs-12">
                    <?php
                        $flag = 1;
                        $ticker = 0;
                        $get_feedback = "SELECT * FROM tbl_feedback 
                                         WHERE status = 1";
                        $slidercarousel = 'slider';
                        $run_feedback = mysqli_query($dbcon, $get_feedback);
                        $count = mysqli_num_rows($run_feedback);
                        while($count > 0 && $ticker < 2) {
                            if($flag == 1) {

                        
                    ?>
						<div id="<?=$slidercarousel;?>" class="flexslider testimonial2-content">
							<ul class="slides">
                                <?php 
                                $ticker++;
                                $get_feedback1 = "SELECT * FROM tbl_feedback  WHERE status = 1";
                                $run_feedback1 = mysqli_query($dbcon, $get_feedback1);
                                while( $row_feedback1 = mysqli_fetch_array($run_feedback1) ) {

                                ?>
                                <li>
                            
                                <?php echo $row_feedback1['comment'];?>
                                
                                </li>
                                <?php } 
                            ?>
                            </ul>
                                </div>
                            <?php
                            } else if($flag == 2) {
                                ?>
                                <div id="<?=$slidercarousel;?>" class="flexslider testimonial2-content">
							    <ul class="slides">
                                    <?php
                                        $ticker++;
                                        while( $row_feedback = mysqli_fetch_array($run_feedback) ) {
                                            
                                    ?>
                                <li>
									<div class="testimonial-author">
										<h3><?php echo $row_feedback['name'];?></h3>
										<span>
                                        <?php 
                                            while($row_feedback['rating'] > 0) {
                                                ?>
                                                 <i class="fa fa-star "  style="color: yellow"> </i>
                                        <?php
                                            $row_feedback['rating']--;} 
                                        ?>

                                        </span>
                                                                        
                                    
                                    <div class="testimonial-thumbbox">
											<img src="logos/k13.webp"  width="5px" height="5px"/>
										</div>
									</div>
								</li>
                            <?php
                                        }
                                        ?>
                                        
                                    </ul>   
                                    </div>              
                        <?php 
                           
                        } 
                        $count--; 
                        $slidercarousel = 'carousel'; 
                        $flag++;
                    }
                        ?>
						
					</div>
					<div class="col-md-4 col-sm-3 col-xs-12">
						<img src="images/testimonial2-main1.png" alt="testimonial2-main1" width="323" height="504"/>
					</div>
				</div>
			</div>
		</div>