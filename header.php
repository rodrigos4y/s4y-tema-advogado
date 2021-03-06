<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<? bloginfo('charset') ?>">
	<meta name="description" content="<? bloginfo('description') ?>">
	<meta name="author" content="<? bloginfo('admin_email') ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=1" />
	
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
							<h1><a href="index.html">
								<?php
									if(function_exists('the_custom_logo')){
										the_custom_logo();
									}
								?>
							</a></h1>
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