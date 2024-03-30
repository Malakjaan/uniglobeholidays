<?php include('resources/header.php'); ?>
	<main class="site-main page-spacing">
		<!-- PageBanner -->
		<div class="container-fluid no-padding pagebanner blogpost">
			<div class="container">
				<h3>Blog Single</h3>
			</div>
		</div><!-- PageBanner /- -->
		
		<!-- BlogPost -->
		<div class="container blog blogpost">
			<div class="section-padding"></div>
			<!-- Row -->
			<div class="container">
			<div class="section-padding"></div>
			<div class="section-header">
				<h3>Blogs</h3>
				<span>We're gonna make dreams </span>
			</div>
            
			<div class="latestblock-section">
				<div class="row">
            <?php
        $get_blog = "SELECT * FROM tbl_blog ";
        $run_blog = mysqli_query($dbcon, $get_blog);
        $sno =1;
        $active = '';
        while( $row_blog = mysqli_fetch_array($run_blog) ) {
        

        
           
    ?>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<article class="type-post">
							<div class="entry-cover col-sm-6 col-md-12 col-xs-6 no-padding">
								<a href="blogpost.html" title="Latest News Cover"><img src="assets/images/packages/<?php echo $row_blog['blog_image'];?>"
											alt="latestblog4" width="370" height="380"/></a>
							</div>
							<div class="entrycontent-block col-sm-6 col-md-12 col-xs-6">
								<div class="entry-meta">
									<div class="post-by"> By <a href="#" title="Admin"> Admin</a></div>
									<div class="post-date"><a href="#" title="May 10, 2016"> May 10, 2016</a></div>
								</div>
								<div class="entry-title">
									<h3><a href="blogpost.html" title=""><?php echo $row_blog['blog_title'];?></a></h3>
								</div>
								<div class="entry-content">
									<p><?php echo $row_blog['blog_description'];?></p>
								</div>
								<a href="blogDetails.php?blog_id=<?=base64_encode($row_blog['id']);?>" title="Read More"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</article>
					</div>
                    

                    <!-- Logic has to be added here as well -->
                 

					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="row">
                         
                        <?php  while( $row_blog = mysqli_fetch_array($run_blog) ) { 
                        ?>
							<article class="col-md-12 col-sm-12 type-post sm-fluid">
 
								<div class="row">
                                    
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="entrycontent-block">
											<div class="entry-meta">
												<div class="post-by"> By <a href="#" title="Admin"> Admin</a></div>
												<div class="post-date"><a href="#" title="May 10, 2016"> May 10, 2016</a></div>
											</div>
											<div class="entry-title">
												<h3><a href="blogDetails.php?blog_id=<?=base64_encode($row_blog['id']);?>"  title="The ship set ground on shore of this uncharted"><?php echo $row_blog['blog_title'];?></a></h3>
											</div>
											<div class="entry-content">
												<p><?php echo $row_blog['blog_description'];?></p>
											</div>
											<a href="blogDetails.php?blog_id=<?=base64_encode($row_blog['id']);?>"  title="Read More"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="entry-cover">
											<a href="blogDetails.php?blog_id=<?=base64_encode($row_blog['id']);?>"  title="Latest News Cover"><img src="assets/images/packages/<?php echo $row_blog['blog_image'];?>"
											alt="latestblog4" width="370" height="380"/></a>
										</div>
									</div>
								</div>
							</article>

                           <?php }?>
                            <!-- You have to repeat the article -->
						</div>
                    </div>

				</div>
			</div>		
		</div>
        <?php $sno++;} ?>
					<div class="comment-form">
						<h3 class="section-title">Leave your comments</h3>
						<form class="row">
							<div class="form-group col-md-6">
								<input type="text" required="" placeholder="Your Name *" class="form-control"/>
							</div>
							<div class="form-group col-md-6">
								<input type="text" required="" placeholder="your Email*" class="form-control"/>
							</div>
							<div class="form-group col-md-12">
								<textarea placeholder="Your Comment" rows="5" class="form-control"></textarea>
							</div>
							<div class="form-group col-md-12">
								<input type="submit" title="Post comments" value="Post comments" name="submit"/>
							</div>	
						</form>
					</div>
				</div><!-- Content Area /- -->
				
				<!-- Widget Area -->
				<div class="col-md-4 col-sm-4 widget-area">
					<aside class="widget widget-search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search Here">
							<span class="input-group-btn">
								<button class="btn btn-search" type="button"><span class="icon icon-Search"></span></button>
							</span>
						</div>
					</aside>
					<aside class="widget widget-catagories">
						<h3 class="widget-title">Popular Categories</h3>
						<ul>
							<li><a href="#" title="Best Destination">Best Destination</a></li>
							<li><a href="#" title="Family Destination">Family Destination</a></li>
							<li><a href="#" title="Costly Destination">Costly Destination</a></li>
							<li><a href="#" title="Family Packages">Family Packages</a></li>
							<li><a href="#" title="World Tour">World Tour</a></li>
						</ul>
					</aside>
					<aside class="widget widget-latestnews">
						<h3 class="widget-title">Latest News</h3>
						<div class="latest-content">
							<h3><a href="blogpost.html" title="Today still wanted by the government survive">Today still wanted by the government survive</a></h3>
							<span>May 14, 2016</span>
							<a href="blogpost.html"><img src="images/latest-news1.jpg" alt="latest-news1" width="79" height="79"/></a>
						</div>
						<div class="latest-content">
							<h3><a href="blogpost.html" title="Then along come they got nothin' but their jeans">Then along come they got nothin' but their jeans</a></h3>
							<span>May 13, 2016</span>
							<a href="blogpost.html"><img src="images/latest-news2.jpg" alt="latest-news2" width="79" height="79"/></a>
						</div>
						<div class="latest-content">
							<h3><a href="blogpost.html" title="It's time to raise the cur tain on the Muppet ">It's time to raise the cur tain on the Muppet </a></h3>
							<span>May 13, 2016</span>
							<a href="blogpost.html"><img src="images/latest-news3.jpg" alt="latest-news3" width="79" height="79"/></a>
						</div>
					</aside>
					<aside class="widget widget-tag">
						<h3 class="widget-title">Populer tags</h3>
						<a href="#" title="Actions">Actions</a>
						<a href="#" title="Beauty">Beauty</a>
						<a href="#" title="Camera">Camera</a>
						<a href="#" title="Dream">Dream</a>
						<a href="#" title="Elegant">Elegant</a>
						<a href="#" title="Fire">Fire</a>
						<a href="#" title="Graphic">Graphic</a>
						<a href="#" title="Technology">Technology</a>
					</aside>
				</div><!-- Widget Area /- -->
			</div><!-- Row -->
		</div><!-- BlogPost /- -->
	</main>
	<!-- Footer Main -->
	<?php include('resources/footer.php'); ?><!-- Footer /- -->
	
	<!-- JQuery v1.11.3 -->	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.ddslick.min.js"></script><!-- For Option Image & decription  -->	
	<script src="libraries/lib.js"></script><!-- Bootstrap JS File v3.3.5 -->	
	<script src="libraries/bootstrap-datetimepicker.min.js"></script><!-- Bootstrap DateTimePicker -->
	<script src="libraries/lightslider-master/lightslider.js"></script><!-- LightSlider -->	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script><!-- Library - Google Map API -->
	
	<!-- Library - Theme JS -->
	<script src="js/functions.js"></script>
</body>
</html>