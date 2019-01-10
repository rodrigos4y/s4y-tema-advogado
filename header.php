<!DOCTYPE html>
<html lang="en">

<head>
	<title>Legal Adviser a Society and People Category Bootstrap responsive Website Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Legal Adviser Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<!-- font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //font -->
    
    <? wp_head(); ?>
</head>

<body>
	<!-- banner -->
	<div class="banner" id="home">
		<!-- agileinfo-dot -->
		<div class="agileinfo-dot">
			<div class="head">
				<div class="navbar-top">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
						<div class="navbar-brand logo ">
							<h1><a href="index.html"> Legal Adviser <i class="fa fa-balance-scale" aria-hidden="true"></i></a></h1>
						</div>

					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?
							wp_nav_menu([
								'theme_location' => 's4l_principal',
								'container' => 'ul',
								'menu_class' => 'nav navbar-nav'
							])
						?>
					</div>
					<!-- /.navbar-collapse -->
				</div>
			</div>
			<div class="w3layouts-banner-slider">
				<div class="container">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<? get_template_part('includes/loop', 'banner'); ?>
							</ul>
						</div>
						<div class="clearfix"> </div>

					</div>
				</div>
			</div>
		</div>
		<!-- //agileinfo-dot -->
	</div>
	<!-- //banner -->