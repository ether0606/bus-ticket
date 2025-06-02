<?php include_once('include/header.php'); ?>
<div class="my-5 pt-5">
		<div class="container my-5">
			<div class="row my-5">
				<div class="col-lg-12 my-5">
<?php
	$from=$_GET['from'];
	$to=$_GET['to'];
	$journey_date=$_GET['journey_date'];
	$schedule=$mysqli->common_query("SELECT * FROM `schedule` join route on route.id=schedule.route_id where route.to_area=$to and route.from_area=$from and date(schedule.start_time_date)='$journey_date'");
	if(!$schedule['error']){
		foreach($schedule['data'] as $s){
			$bus_id=$s->bus_id;
			$bus=$mysqli->common_query("SELECT bus.*,buscompany.name FROM `bus` join buscompany on buscompany.id=bus.bus_company_id where bus.id=$bus_id");
			if(!$bus['error']){
				foreach($bus['data'] as $b){
		?>
	
					<div class="card">
						<div class="card-header">
							<h4><?= $b->name?></h4>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<table>
									<?php
									$bus_schedule=$mysqli->common_query("SELECT * FROM `seat` where bus_id=$bus_id order by seat_row,seat_column");
									if(!$bus_schedule['error']){
										$bussl=0;
										foreach($bus_schedule['data'] as $bs){
											if($bussl!=$bs->seat_row){
												if($bs->seat_column==1){
										?>
													</tr><tr>
												<?php } ?>
												<td>
													<input class="form-check-input" type="checkbox" value="<?= $bs->id ?>" id="defaultCheck1"> <?= $bs->seat_number ?>
												</td>
												<?php
											}
											else{
												if($bs->seat_column==1){
										?>
													<tr>
												<?php } ?>
												<td>
													<input class="form-check-input" type="checkbox" value="<?= $bs->id ?>" id="defaultCheck1"> <?= $bs->seat_number ?>
												</td>
												<?php
											}
											$bussl=$bs->seat_row;
											
									?>
									
									<?php } } ?>
									</table>
								</div>
							</div>
						</div>
					</div>
		<?php } } } }else{ ?>

		
						<div class="card">
							<div class="card-header">
								<h4>Bus Route</h4>
							</div>
							<div class="card-body">
								<div class="alert alert-danger">
									<h4 class="alert-heading">No Bus Route Found</h4>
									<p>No bus route found for this route and date</p>
								</div>
							</div>
						</div>
	<?php } ?>
	
				</div>
			</div>
		</div>
	</div>
									




	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="assets/#"><img src="assets/images/logo.png" alt="">travelix</a></div>
							</div>
							<p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="assets/#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="assets/#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="assets/#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="assets/#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="assets/#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">blog posts</div>
						<div class="footer_content footer_blog">
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="assets/images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="assets/blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="assets/images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="assets/blog.html">New destinations for you</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>

							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="assets/images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="assets/blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="assets/#">design</a></li>
								<li class="tag_item"><a href="assets/#">fashion</a></li>
								<li class="tag_item"><a href="assets/#">music</a></li>
								<li class="tag_item"><a href="assets/#">video</a></li>
								<li class="tag_item"><a href="assets/#">party</a></li>
								<li class="tag_item"><a href="assets/#">photography</a></li>
								<li class="tag_item"><a href="assets/#">adventure</a></li>
								<li class="tag_item"><a href="assets/#">travel</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="assets/images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="assets/images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">2556-808-8613</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="assets/images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="assets/mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="assets/images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="assets/https://colorlib.com">www.colorlib.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="assets/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="assets/#">home</a></li>
								<li class="footer_nav_item"><a href="assets/about.html">about us</a></li>
								<li class="footer_nav_item"><a href="assets/offers.html">offers</a></li>
								<li class="footer_nav_item"><a href="assets/blog.html">news</a></li>
								<li class="footer_nav_item"><a href="assets/contact.html">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/styles/bootstrap4/popper.js"></script>
<script src="assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="assets/plugins/easing/easing.js"></script>
<script src="assets/js/custom.js"></script>

</body>

</html>