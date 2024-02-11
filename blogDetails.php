<?php 

    if(!isset($_GET['blog_id'])) {
        header("location: index.php");
    }
    include('resources/header.php') ;
    $bid = base64_decode($_GET['blog_id']);
    $get_blog = "SELECT * FROM tbl_blog WHERE id = $bid ";
    $run_blog = mysqli_query($dbcon, $get_blog);
    while( $row_blog = mysqli_fetch_array($run_blog) ) {
    
?>


	<main class="site-main page-spacing">
		<!-- PageBanner -->
		<div class="container-fluid no-padding pagebanner blogpost">
			<div class="container">
				<h3>Blog Details</h3>
			</div>
		</div><!-- PageBanner /- -->
		
		<!-- BlogPost -->
		<div class="container blog blogpost">
			<div class="section-padding"></div>
			<!-- Row -->
			<div class="row">
				<!-- Content Area -->
                <div class="col-md-8 col-sm-8 content-area">
						<article class="type-post">
                        <div class="entry-cover">
								<a href="blogpost.html" title="Latest News Cover"><img src="assets/images/packages/<?php echo $row_blog['blog_image'];?>"
                                alt="blog1" width="798" height="460"/> </a>
							</div>
							
                            <div class="entrycontent-block">
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
                                
							</div>
                    
						</article>
                        <?php }?>
					</div>
                    
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
				
							<div class="entry-share">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<h3>Share This Post</h3>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<ul>
											<li><a title="Facebook" href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
											<li><a title="Twitter" href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
											<li><a title="GooglePlus" href="#"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
											<li><a title="Linkedin" href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
								
				
				
			</div><!-- Row -->
		</div><!-- BlogPost /- -->
	</main>
	<!-- Footer Main -->
	<?php include('resources/footer.php')    ?>