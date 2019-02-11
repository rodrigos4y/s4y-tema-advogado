<? /*

    Template Name: Página de notícias

*/ ?>
<?php
    get_header("noticias");
?>
    <h1><? the_title(); ?></h1>
    <!-- news -->
    <div class="" id="news">
		<div class="gallery-grids">
			<div class="gallery-top-grids">
				<? get_template_part('includes/pagina', 'noticias'); ?>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
    <!-- //news -->
    <?php get_sidebar(); ?>
<?php
    get_footer();
?>