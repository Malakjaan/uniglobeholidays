<aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget populardestination_widget">
						<h3 class="widget-title">Popular <span> Destination</span></h3>
						<ul>
                        <?php
                        $get_gallery = "SELECT * FROM tbl_gallery limit 4";
                        $run_gallery = mysqli_query($dbcon, $get_gallery);
                        while($row_gallery = mysqli_fetch_array($run_gallery)) {
                    ?>
							<li><a title="instagram" href="#"><img style=" width:130px; height:130px;" alt="destinaion1" src="assets/images/packages/<?php echo $row_gallery['image'];?>"></a></li>
                            <?php } ?>
						</ul>	
					</aside>