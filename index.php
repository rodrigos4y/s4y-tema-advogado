<? get_header(); ?>
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><i class="fa fa-tint" aria-hidden="true"></i>Oil <span>Production</span></h4>
				</div>
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="<? bloginfo('template_url') ?>/images/1.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque
							ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis
							porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper. Cras tempor massa
							luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div class="w3l-about-grids_inner">
				<div class="col-md-6 w3ls-about-left">
					<h2>Welcome to the Legal Adviser</h2>
					<h6>Lorem ipsum dolor sit amet,Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</h6>
					<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum
						neque hendrerit.Lorem ipsum dolor sit amet,Phasellus dapibus felis elit, sed accumsan arcu gravida vitae</p>
					<p>Lorem ipsum dolor sit amet,Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus
						ullamcorper, nec interdum neque hendrerit.</p>
					<a href="#contact" class="scroll hvr-shutter-out-vertical">Contact</a>
				</div>
				<div class="col-md-6 w3ls-about-right">
					<img src="<? bloginfo('template_url') ?>/images/ab.jpg" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- about -->
	<div class="why jarallax" id="features">
		<div class="agile-dot">
			<div class="container">
				<div class="about-heading two">
					<h3>Features</h3>
					<p>You Are Always One Step Ahead</p>
				</div>
				<div class="w3l-about-grids">
					<div class="col-md-4 w3ls-about-why-us-agile">
						<div class="agileits-icon-grid">
							<div class="icon-left hvr-radial-out">
								<i class="fa fa-cog" aria-hidden="true"></i>
							</div>
							<div class="icon-right">
								<h5>Great Discount</h5>
								<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="agileits-icon-grid">
							<div class="icon-left hvr-radial-out">
								<i class="fa fa-heart" aria-hidden="true"></i>
							</div>
							<div class="icon-right">
								<h5>Community Service</h5>
								<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="agileits-icon-grid">
							<div class="icon-left hvr-radial-out">
								<i class="fa fa-paper-plane" aria-hidden="true"></i>
							</div>
							<div class="icon-right">
								<h5>Great Discount</h5>
								<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-4 w3ls-about-right">
						<div class="w3ls-about-right-img">

						</div>
					</div>
					<div class="col-md-4 w3ls-about-why-us-agile">
						<div class="agileits-icon-grid">
							<div class="icon-left hvr-radial-out">
								<i class="fa fa-cog" aria-hidden="true"></i>
							</div>
							<div class="icon-right">
								<h5>Community Service</h5>
								<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="agileits-icon-grid">
							<div class="icon-left hvr-radial-out">
								<i class="fa fa-heart" aria-hidden="true"></i>
							</div>
							<div class="icon-right">
								<h5>Great Discount</h5>
								<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="agileits-icon-grid">
							<div class="icon-left hvr-radial-out">
								<i class="fa fa-paper-plane" aria-hidden="true"></i>
							</div>
							<div class="icon-right">
								<h5>Community Service</h5>
								<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="about-heading">
				<h3>Áreas de atuação</h3>
				<p>Veja as áreas de atuações da nossa equipe</p>
			</div>
			<div class="w3-agileits-services-grids">
				<div class="col-md-4 w3-agileits-services-left">
					<div class="services-info">

					</div>
				</div>
				<div class="col-md-8 w3-agileits-services-right">
					<div class='bar_group'>
					<? get_template_part('includes/loop', 'area'); ?>
						
					</div>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- news -->
	<div class="gallery" id="news">
		<div class="container">
			<div class="about-heading">
				<h3>Notícias recentes</h3>
				<p>Conectando você ao mundo jurídico</p>
			</div>
		</div>
		<div class="gallery-grids">
			<div class="gallery-top-grids">
				<? get_template_part('includes/loop', 'principal'); ?>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //news -->
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="about-heading two">
				<h3>Amazing Lawyers</h3>
				<p>You Are Always One Step Ahead</p>
			</div>
			<div class="team-grids">
				<div class="col-md-3 agileinfo-team-grid">
					<img src="<? bloginfo('template_url') ?>/images/t1.jpg" alt="">
					<div class="captn">
						<h4>Peter Parker</h4>
						<p>Lawyer </p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo-team-grid">
					<img src="<? bloginfo('template_url') ?>/images/t2.jpg" alt="">
					<div class="captn">
						<h4>Mary Jane</h4>
						<p>Lawyer</p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo-team-grid">
					<img src="<? bloginfo('template_url') ?>/images/t3.jpg" alt="">
					<div class="captn">
						<h4>Johan Botha</h4>
						<p>Lawyer</p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo-team-grid">
					<img src="<? bloginfo('template_url') ?>/images/t4.jpg" alt="">
					<div class="captn">
						<h4>Steven Wilson</h4>
						<p>Lawyer</p>
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- contact -->
	<div class="free_agile_consultation contact">
		<div class="col-md-6 free_agile_consultaion_img">


		</div>
		<div class="col-md-6 free_consultation_agile">
			<h4>Free Consultation</h4>
			<h6>Lorem ipsum dolor sit amet,Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</h6>
			<form action="#" method="post">
				<div class="contact-left agileits-w3layouts free_w3ls_agile">
					<input type="text" name="First Name" placeholder="First Name" required="">
					<input class="email" name="Last Name" type="text" placeholder="Last Name" required="">
					<input type="tel" name="Number" placeholder="Mobile Number" required="">
					<input class="email" name="Email" type="email" placeholder="Email" required="">
					<select class="form-control">
								<option>Practice Areas</option>
								<option value="january">January</option>
								<option value="february">February</option>
								<option value="march">March</option>
								<option value="april">April</option>
								<option value="may">May</option>
								<option>Other</option>
							</select>

					<textarea name="Message" placeholder="Message" required=""></textarea>
					<input type="submit" value="SEND REQUEST">
				</div>

			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //contact -->
	<!-- offer -->
	<div class="jarallax offer">
		<div class="agile-dot">
			<div class="container">
				<div class="about-heading offer-heading">
					<h3>People We’ve Helped</h3>
					<p>You Are Always One Step Ahead</p>
				</div>
				<div class="w3ls-offer-slider">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider3">
								<li>
									<div class="agileinfo-offer-grid">
										<h4><i class="fa fa-quote-left" aria-hidden="true"></i></h4>
										<h5>Gary Growles</h5>
										<p>Aenean volutpat auctor ultrices. Aliquam ac turpis ultrices, porta enim at, interdum velit. Ut ligula justo, sodales
											eu nisi a, molestie dictum leo. Sed blandit porta ante.</p>
									</div>
								</li>
								<li>
									<div class="agileinfo-offer-grid">
										<h4><i class="fa fa-quote-left" aria-hidden="true"></i></h4>
										<h5>Ivan Stepaniv</h5>
										<p>Vestibulum euismod porttitor interdum. Vivamus porta consectetur nulla porttitor hendrerit. Pellentesque ultrices
											augue ut nibh feugiat, nec egestas orci cursus.</p>
									</div>
								</li>
								<li>
									<div class="agileinfo-offer-grid">
										<h4><i class="fa fa-quote-left" aria-hidden="true"></i></h4>
										<h5>Jorge Lopez</h5>
										<p>Aenean volutpat auctor ultrices. Aliquam ac turpis ultrices, porta enim at, interdum velit. Ut ligula justo, sodales
											eu nisi a, molestie dictum leo. Sed blandit porta ante.</p>
									</div>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //offer -->
	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="about-heading">
				<h3>Contact Us</h3>
				<p>You Are Always One Step Ahead</p>
			</div>
			<div class="w3l-about-grids">
				<div class="contact-info">
					<ul>
						<li><i class="fa fa-location-arrow" aria-hidden="true"></i>
							<h5>Address<span>Honey 4, 8305, San Francisco</span></h5>
						</li>
						<li><i class="fa fa-phone" aria-hidden="true"></i>
							<h5>Call Us<span>+1 (100)222-0-33</span></h5>
						</li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i>
							<h5>Mail Us<span><a href="mailto:info@example.com">info@example.com</a></span></h5>
						</li>
					</ul>
				</div>
				<div class="contact-w3ls-row">
					<form action="#" method="post">
						<div class="col-md-5 col-sm-5 contact-right agileits-w3layouts">
							<textarea name="Message" placeholder="Message" required=""></textarea>
						</div>
						<div class="col-md-7 col-sm-7 contact-left agileits-w3layouts">
							<input type="text" name="First Name" placeholder="First Name" required="">
							<input class="email" name="Last Name" type="text" placeholder="Last Name" required="">
							<input type="text" name="Number" placeholder="Mobile Number" required="">
							<input class="email" name="Email" type="email" placeholder="Email" required="">
							<input type="submit" value="SUBMIT">
						</div>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- map -->
	<div class="agileits-w3layouts-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
		    class="map" allowfullscreen=""></iframe>
	</div>
	<!-- //map -->
	<? get_footer(); ?>
