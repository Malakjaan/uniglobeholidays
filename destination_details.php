<?php 

    if(!isset($_GET['id'])) {
        header("location: index.php");
    }
    include('resources/header.php') ;
    $did = base64_decode($_GET['id']);
    $get_dest = "SELECT * FROM tbl_destination WHERE id = $did ";
    $run_dest = mysqli_query($dbcon, $get_dest);
    while( $row_dest = mysqli_fetch_array($run_dest) ) {
    
?>


	<main class="site-main page-spacing">
		<!-- PageBanner -->
		<div class="container-fluid no-padding pagebanne destpost">
			<div class="container">
				<h3>Destination Details</h3>
			</div>
		</div><!-- PageBanner /- -->
		
		<!-- destPost -->
		<div class="container dest destpost">
			<div class="section-padding"></div>
			<!-- Row -->
			<div class="row">
				<!-- Content Area -->
                <div class="col-md-8 col-sm-8 content-area">
						<article class="type-post">
                        <div class="entry-cover">
								<a href="destpost.php" title="Latest News Cover"><img src="assets/images/destinations/<?php echo $row_dest['image'];?>"
                                alt="dest1" width="798" height="460"/> </a>
							</div>
							
                            <div class="entrycontent-block">
								<div class="entry-meta">
									<div class="post-by"> By <a href="#" title="Admin"> Admin</a></div>
									<div class="post-date"><a href="#" title="May 10, 2016"> May 10, 2016</a></div>
								</div>
								<div class="entry-title">
									<h3><a href="destpost.html" title=""><?php echo $row_dest['destination_name'];?></a></h3>
								</div>
                                <div class="entry-title">
									<h3><a href="destpost.html" title=""><?php echo $row_dest['destination_desc'];?></a></h3>
								</div>
								<div class="entry-content">
									<p><?php echo $row_dest['destination_location'];?></p>
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
				
						
								
				
				
			</div><!-- Row -->
		</div><!-- destPost /- -->
	</main>
	<!-- Footer Main -->
	<?php include('resources/footer.php')    ?>