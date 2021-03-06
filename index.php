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
				<? 
					$query = new WP_Query([
						'post_type'   => 'sobre'
					]);
					while($query->have_posts()) : $query->the_post(); 

				?>
					<h2><? the_title(); ?></h2>
					<? the_content(); ?>
					<a href="#contact" class="scroll hvr-shutter-out-vertical">Entre em contato</a>
					<? endwhile; ?>
				</div>
				<div class="col-md-6 w3ls-about-right">
					<img src="<? bloginfo('template_url') ?>/images/ab.jpg" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
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
	<!--<div class="team" id="team">
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
	</div>-->
	<!-- //team -->
	
	<!-- offer -->
	<!--<div class="jarallax offer">
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
	</div>-->
	<!-- //offer -->
	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="about-heading">
				<h3>Contato</h3>
				<p>Entre em contato conosco pelo formulário abaixo</p>
			</div>
			<div class="w3l-about-grids">
				<div class="contact-info">
					<ul>
						<? get_template_part('includes/loop', 'contato'); ?>
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
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.3788702096513!2d-43.179631684418545!3d-22.899392443365667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5900b85987%3A0xd5eab2001cc29b78!2sRua+Visconde+de+Inhauma%2C+37+-+21+%C2%BA+andar+-+Centro%2C+Rio+de+Janeiro+-+RJ%2C+20091-007!5e0!3m2!1spt-BR!2sbr!4v1547213884365" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!-- //map -->
	<? get_footer(); ?>