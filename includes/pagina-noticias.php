<?
$args = array(
    'posts_per_page' => 6
);
$post_type = new WP_Query($args);
while($post_type -> have_posts()) : $post_type -> the_post();
?>
    <div class="container news">
        <h2><? the_title(); ?></h2>
        <? the_content(); ?>
    </div>
    <hr>
<?
endwhile;

?>