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