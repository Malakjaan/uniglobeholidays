<?php include('resources/header.php'); ?>
	<main class="site-main page-spacing">
		<!-- PageBanner -->
		<div class="container-fluid no-padding pagebanner contactus">
			<div class="container">
				<h3>Contact Us</h3>
			</div>
		</div><!-- PageBanner /- -->
		
		<div class="container contactus-section">
			<div class="section-padding"></div>
			<div class="row">
				<div class="col-md-6 contactus-left">
					<!-- Map -->
					
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15249885.318783779!2d82.7525294!3d21.0680074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e18fe756f26911%3A0x22492ffa511f029e!2sUniglobe%20Holidays!5e0!3m2!1sen!2sin!4v1710926009268!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div><!-- Map /- -->
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 office-add">
							<h3 class="block-title">Office Address</h3>
							<p><span><strong>Primary address</strong></span> <?php echo $row_details['paddress'];?></p>
							<p><span><strong>Secondary address</strong></span> <?php echo $row_details['saddress'];?></p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 contact-info">
							<h3 class="block-title">Contact Info</h3>
							<p><span>Call Us :</span><a href="tel:011234567896" title="011234567896"> (+91) <?php echo $row_details['pcontact'];?></a></p>
							<p><span>Mail Us :</span><a href="mailto:info@ourdomain.com" title="info@ourdomain.com"> <?php echo $row_details['pemail'];?></a></p>
							<p><span>Fax No :</span><a href="tel:011234567890" title="011234567890"> <?php echo $row_details['scontact'];?></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 contactus-right">
					<form class="contactus-form" method="post">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<input type="text" name="name" required="" class="form-control" id="name" placeholder="Your Name*"/>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<input type="email" name="email" required="" class="form-control" id="email" placeholder="Email Address*"/>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<textarea rows="5" name="message" required="" class="form-control" id="message" placeholder="Your Comment"></textarea>
								</div>
							</div>	
							<div class="form-group col-md-8">
                                    <label for="inputContact">Your Rating</label>
                                    <select name="rating" id="rating" class="form-control" >
                                        <option value="1"> 1 Star </option>
                                        <option value="2"> 2 Star</option>
                                        <option value="3"> 3 Star</option>
                                        <option value="4"> 4 Star</option>
                                        <option value="5"> 5 Star</option>
                                    </select>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<input type="submit" name="commentSubmit" value="Submit Feedback" title="Send" name="btn_save_comment_detail"id="btn_save_comment_detail">
								</div>
							</div>
						</div>
					</form>	
				</div>
			</div>
		<div class="section-padding"></div>
	</div>

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
