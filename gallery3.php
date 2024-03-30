<?php include('resources/header.php'); ?>

	<main class="site-main page-spacing">
		<!-- PageBanner -->
		<div class="container-fluid no-padding pagebanner gallery3column">
			<div class="container">
				<h3>Our gallery</h3>
			</div>
		</div><!-- PageBanner /- -->
		<div class="container gallery-section">
			<div class="section-padding"></div>
			<div class="section-header">
				<h3>our holiday gallery</h3>
				<span>We're gonna make our dreams come true</span>
			</div>
			<ul class="portfolio-list">
            <?php
        $get_gallery = "SELECT * FROM tbl_gallery ";
        $run_gallery = mysqli_query($dbcon, $get_gallery);
        while( $row_gallery = mysqli_fetch_array($run_gallery) ) {

    ?>
				<li class="col-md-4 col-sm-4 col-xs-4">
					<div class="content-image-block">
						<a href="index-2.html#"><img src="assets/images/packages/<?php echo $row_gallery['image'];?>" alt="gallery" width="370" height="320"/></a>
						<div class="content-block-icon">
						<a href="assets/images/packages/<?php echo $row_gallery['image'];?>" class="gallery-popup"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</li>
                <?php } ?>
			</ul>
			</nav>
			<div class="section-padding"></div>
		</div>
	</main>
	
	<!-- Footer Main -->
    <?php include('resources/footer.php'); ?>
	<!-- Footer /- -->
	
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