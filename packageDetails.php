<?php 
	include('resources/header.php'); 
	$pid = base64_decode($_GET['pid']);
	$get_data = "SELECT * FROM tbl_package WHERE id = $pid";
	$run_data = mysqli_query($dbcon, $get_data);
	$row_data = mysqli_fetch_assoc($run_data);
?>

<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.accord, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.accord:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>

	<main class="site-main page-spacing">
		<!-- PageBanner -->
		<div class="container-fluid no-padding pagebanner aboutus">
			<div class="container">
				<h3><?=$row_data['package_name'];?></h3>
			</div>
		</div><!-- PageBanner /- -->	

		<!-- TourInfo -->
		<div class="container">
			<div class="tourinfo-section">
				<div class="section-padding"></div>
				<div class="col-md-5">
				<img src="assets/images/packages/<?=$row_data['image'];?>" alt="tourinfo-men" width="407" height="496"/>
				</div>
				<div class="col-md-7 tourinfo-content">
					<h3>over 10 years experience in tourist expert</h3>
					<p>Straight ahead and on the track now. We're gonna make our dreams come true. Makin their way the only way they know how that's just a little bit.</p>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-5">
							
							
								<strong>Package Includes</strong>
								<?php
									$get_inc = "SELECT * FROM tbl_assign_inc_exc WHERE p_id = $pid AND is_inc_exc = 1";
									$run_inc = mysqli_query($dbcon, $get_inc);
									while($row_inc = mysqli_fetch_array($run_inc)) {
										$pie = $row_inc['p_i_e'];

										$query = "SELECT title from tbl_inc_exc WHERE id = '$pie'";
										$run = mysqli_query($dbcon, $query);
										$row = mysqli_fetch_assoc($run);
								?>
								<p><i class="fa fa-check"></i> 
									<?=$row['title'];?>
								</p>
								<?php }?>
						
						</div>
						<div class="col-md-6 col-sm-6 col-xs-5">
							<ul>
								<strong>Package Excludes</strong>
								<?php
									$get_inc = "SELECT * FROM tbl_assign_inc_exc WHERE p_id = $pid AND is_inc_exc = 0";
									$run_inc = mysqli_query($dbcon, $get_inc);
									while($row_inc = mysqli_fetch_array($run_inc)) {
										$pie = $row_inc['p_i_e'];

										$query = "SELECT title from tbl_inc_exc WHERE id = '$pie'";
										$run = mysqli_query($dbcon, $query);
										$row = mysqli_fetch_assoc($run);
								?>
								<p><i class="fa fa-close"></i> 
									<?=$row['title'];?>
								</p>
								<?php }?>
							</ul>
						</div>
					</div>
				</div>
				<div class="section-padding"></div>
			</div>
		</div><!-- TourInfo /- -->

		<!-- TourInfo -->
		<div class="container">
			<div class="tourinfo-section">
				<div class="section-padding"></div>
				<!-- <div class="col-md-5">
					<img src="assets/images/packages/<?//=$row_data['image'];?>" alt="tourinfo-men" width="407" height="496"/>
				</div> -->
				<div class="col-md-12 tourinfo-content">
					<h3>over 10 years experience in tourist expert</h3>
					<p>Straight ahead and on the track now. We're gonna make our dreams come true. Makin their way the only way they know how that's just a little bit.</p>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							
							<div class="accordion accordion-flush" id="accordionFlushExample">
							  
							  <?php 
							  	$get_package_details = "SELECT * FROM tbl_package_desc WHERE p_id = $pid";
							  	$run_package_details = mysqli_query($dbcon, $get_package_details);
							  	$sno = 1;
							  	while ($row_package_details = mysqli_fetch_assoc($run_package_details)){


							  ?>
							  <button class="accordion">Day - 
								<?=$row_package_details['day_no'];?> : 
								<?=$row_package_details['day_title'];?> 
							</button>
							<div class="panel">
								<p>
									<?=$row_package_details['day_desc'];?>
								</p>
							</div>
							<?php $sno++;} ?>

							</div>
						</div>
					</div>
				</div>
				<div class="section-padding"></div>
			</div>
		</div><!-- TourInfo /- -->
		
		
		<!-- CallOut -->
		<div class="container-fluid no-padding callout-section">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-7 col-xs-10">
						<div class="callout-content">
							<h3>If You Want To Book a tour</h3>
							<span>Simply Contact Our Team And Get It Done</span>
							<ul>
								<li><span class="icon icon-Phone2"></span><a href="tel:+91<?php echo $row_details['pcontact'];?>" title="1234567896">
									<?php echo $row_details['pcontact'];?>
								</a></li>
								<li><span class="icon icon-Mail"></span><a href="mailto:<?php echo $row_details['pemail'];?>" title="info@ourdomain.com">
									<?php echo $row_details['pemail'];?>
								</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- CallOut /- -->
	</main>
	
	<!-- Footer Main -->
<?php include('resources/footer.php'); ?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("accord");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>