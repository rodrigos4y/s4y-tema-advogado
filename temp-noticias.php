<? /*

    Template Name: Página de notícias

*/ ?>
<?php
    get_header("noticias");
?>
    <!-- news -->
    <div class="container-fluid">
        <? 
        if(! is_active_sidebar('s4l-sidebar')) {
            echo '<div class="gallery col-lg-12 col-md-12" id="news">';
        } else {
            echo '<div class="gallery col-lg-9 col-md-9" id="news">';
        }
        ?>
        
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
    </div>
<?php
    get_footer();
?>