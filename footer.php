<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="agileinfo_footer_bottom">
				<div class="col-md-6 agileinfo_footer_bottom_grid">
					<h6>Links</h6>
					<ul class="tag2 tag_agileinfo">
						<li><a href="#home" class="scroll">Home</a></li>
						<li><a href="#about" class="scroll">About</a></li>
						<li><a href="#features" class="scroll">Features</a></li>
						<li><a href="#team" class="scroll">Team</a></li>
						<li><a href="#news" class="scroll">News</a></li>
						<li><a href="#contact" class="scroll">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-6 agileinfo_footer_bottom_grid">
					<h6>Follow Us</h6>
					<div class="w3l-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_footer_bottom1">

				<p>© 2017 Legal Adviser. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- //footer -->
	<script src="<? bloginfo('template_url') ?>/js/jquery-2.1.4.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<script src="<? bloginfo('template_url') ?>/js/responsiveslides.min.js"></script>
	<script src="<? bloginfo('template_url') ?>/js/bars.js"></script>
	<script src="<? bloginfo('template_url') ?>/js/jarallax.js"></script>
	<script src="<? bloginfo('template_url') ?>/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="<? bloginfo('template_url') ?>/js/easing.js"></script>
	<script type="text/javascript" src="<? bloginfo('template_url') ?>/js/move-top.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
    <script src="<? bloginfo('template_url') ?>/js/bootstrap.js"></script>
    
    <? wp_footer(); ?>
</body>

</html>