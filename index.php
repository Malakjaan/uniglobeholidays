<?php include('resources/header.php'); ?>

	<main class="site-main page-spacing">
		<!-- PhotoSlider2 -->
		<div class="container-fluid no-padding photoslider2">
			<!-- PhotoSlider2 Carousel-->
			<div class="container-fluid no-padding photoslider2-carousel">
				<!-- Booking Form -->
				<div class="booking-form-section">
					<div class="container">
						<div class="row">
							<div class="col-md-5 col-sm-12 col-xs-12 bookingform-details">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#booking_flight" aria-controls="booking_flight" role="tab" data-toggle="tab"><img src="images/photoslider2-ic1.png" alt="photoslider2-ic1" width="24" height="23"/>Book Your Tour</a></li>
									
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active fade in" id="booking_flight">
                                    <div class="form-group col-md-12 no-padding">
     
        </div>
</div>
     
<form class="booking-form" id="frmbooking" action="resources/insert_booking.php"enctype="multipart/form-data"method="post" >
    <div class="row">
        <div class="form-group col-md-12 no-padding">
            <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>name</label>
                  
                        <input type='text' name="name" id="name" class="form-control"/>
                        <span class="input-group-addon add-on">
                        </span>
                 
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>Phone</label>
                   
                        <input type='text' name="contact" id="contact"  class="form-control"/>
                        <span class="input-group-addon add-on">
                        </span>
                    
                </div>
            </div>
        </div>
        <div class="form-group col-md-12 no-padding">
            <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
                    <label>Email</label>
                    <div class="input-group " id="datepicker2">
                        <input type='email' name="email" id="email"  class="form-control"/>
                        <span class="input-group-addon add-on">
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group col-md-12 no-padding">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>Check in date</label>
                    <div class="input-group" id="datepicker">
                        <input type='date' name="check_in_date" id="check_in_date"  class="form-control"/>
                        <span class="input-group-addon add-on">
                            
                        </span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label>Check out date</label>
                    <div class="input-group" id="datepicker2">
                        <input type='date' name="check_out_date" id="check_out_date" class="form-control"/>
                        <span class="input-group-addon add-on">
                            
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-md-12 no-padding">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-4 booking_rooms select-options">
                    <label>Days</label>
                    <select class="form-control" name="days" id="days">
                        "'"
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7"> 7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-4 adults select-options">
                    <label>Adults</label>
                    <select class="form-control" name="adults" id="adults">
                        <option>02 Adults</option>
                        <option>03 Adults</option>
                        <option>05 Adults</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-4 select-options" >
                    <label>Childs</label>
                    <select class="form-control" name="childs" id="childs">
                        <option>01 Childs</option>
                        <option>02 Childs</option>
                        <option>03 Childs</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group col-md-12 no-padding">
        <button class="btn btn-primary"  id="btn_save_booking_details" type="submit" title="Book Now">Book Now</button>
        </div>
    </div>
</form>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Booking Form /- -->
				<?php include('resources/slider.php');?>	
			</div><!-- PhotoSlider2 Carousel /- -->	
		</div><!-- PhotoSlider2 /- -->
		
		<?php include('resources/packages.php'); ?>
		
		<!-- Best Destination 2 -->
		<div class="container-fluid no-padding bestdestination2">
			<div class="section-padding"></div>
				<div class="container">
					<div class="section-header">
						<h3>Travel and change of place impart new vigor to the mind</h3>
					</div>
					<div class="best-destination-block">
						<div class="col-md-3 col-sm-3 col-xs-6 best-destination-box">
							<div class="best-destination-thumb">
								<img src="images/bestdestination-ic1.png" alt="bestdestination-ic1" width="28" height="27"/>
							</div>
							<h3>Search For Destination</h3>
							<span>Over 2000 Destinations</span>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 best-destination-box">
							<div class="best-destination-thumb">
								<img src="images/bestdestination-ic2.png" alt="bestdestination-ic2" width="28" height="27"/>
							</div>
							<h3>Book Your Tour</h3>
							<span>Book Online</span>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 best-destination-box">
							<div class="best-destination-thumb">
								<img src="images/bestdestination-ic3.png" alt="bestdestination-ic3" width="28" height="27"/>
							</div>
							<h3>Pay For Your Tour</h3>
							<span>Payment Is Secure</span>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 best-destination-box">
							<div class="best-destination-thumb">
								<img src="images/bestdestination-ic4.png" alt="bestdestination-ic4" width="28" height="27"/>
							</div>
							<h3>Ready For Tour</h3>
							<span>Enjoy The Trip</span>
						</div>
					</div>
					<div class="view-destination">
						<a href="#" title="Book a tour">Book a tour</a>
						<a href="#" title="view all destination">view all destination</a>
					</div>
				</div>
			<div class="section-padding"></div>
		</div><!-- Best Destination 2 /- -->
		
		<?php include('resources/destinations.php'); ?>
		
		<!-- Slider Section -->
		<div class="container-fluid no-padding slider-section">
			<div class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/slider1.jpg" alt="photoslider1" width="1920" height="540"/>
						<div class="container">
							<div class="row">
								<div class="col-md-7 col-sm-9">
									<div class="slider-content">
										<h3>Srinagar</h3>
										<p>They'll have to make the best of things its an uphill climb. Makin' your way in the world today takes everything you've got. Takin' a break from all your worries sure would help a lot. Boy the way Glen Miller played. Songs that made the hit parade. Guys like us we had it made. Those were the days.</p>
										<span>₹300.00</span>
										

                                        <button id="<?php echo $row['id'];?>" type="button" class="btn btn-primary btneditTour" data-toggle="modal"  data-target="#editTour">
                                            Book a Tour
                                        </button>
                                        
                                       
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div><!-- Slider Section /- -->	
		
		<!-- Testimonial2 Section -->
        <?php include('resources/feedback.php'); ?>
		<!-- Testimonial2 Section /- -->

        <?php include('resources/gallery.php'); ?>
		<!-- Partner Section -->
		<div class="container-fluid no-padding partner2-section">
			<div class="container">
				<div class="partner2-carousel">
					<div class="partner-box2">
						<a href="#" title="partner"><img src="images/partner2.1.png" alt="partner" width="96" height="78"/></a>
					</div>
					<div class="partner-box2">
						<a href="#" title="partner"><img src="images/partner2.2.png" alt="partner" width="82" height="87"/></a>
					</div>
					<div class="partner-box2">
						<a href="#" title="partner"><img src="images/partner2.3.png" alt="partner" width="96" height="85"/></a>
					</div>
					<div class="partner-box2">
						<a href="#" title="partner"><img src="images/partner2.4.png" alt="partner" width="86" height="93"/></a>
					</div>
					<div class="partner-box2">
						<a href="#" title="partner"><img src="images/partner2.5.png" alt="partner" width="126" height="61"/></a>
					</div>
					<div class="partner-box2">
						<a href="#" title="partner"><img src="images/partner2.6.png" alt="partner" width="116" height="63"/></a>
					</div>
				</div>
			</div>
		</div><!-- Partner Section /- -->
		
		<!-- Latest News -->
        <?php include('resources/blog.php'); ?>
		<!-- Latest News /- -->
	</main>
	<!-- Footer Main -->
<?php include('resources/footer.php'); ?>
<div class="modal fade" id="editTour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Tour Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmeditTour" method="post" style="width: 475px;">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Place you want to go?</label> <input class="form-control" id="Tour_name" name="Tour_name" placeholder="Tour Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Tour Cost</label> <input class="form-control" id="Tour_cost" name="Tour_name" placeholder="Tour " type="text">
                                </div>
                                
                                </div>
                               
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="number">No of Adults</label> <input class="form-control" id="no_of_adults" name="no_of_adults" placeholder="No of Adults" type="number">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="number"></label>No of Children <input class="form-control" id="no_of_childrens" placeholder="No of Childrens" type="number" name="no_of_childrens">
                                </div>
                            </div>
                                

                            <div class="form-group col-md-12">
                                    <label for="number"></label>Tour cost <input class="form-control" id="Tour_cost" placeholder="Package cost " type="number" name="Tour_cost">
                            </div>
                              
                                
                                

            <div class="modal-footer">
                <button class="btn btn-primary" id="btn_update_package_details" type="submit">Submit Your Tour</button>
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form> 
            
        </div>
        </div>
    </div>
  </div>
  