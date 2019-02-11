<? 
  if(! is_active_sidebar('s4l-sidebar')) {
    return;
  }
?>

<!-- sidebar -->
<aside class="col-sm-3 col-xs-12 blog-sidebar well">
  <ul class="list-unstyled">
    <? dynamic_sidebar('s4l-sidebar') ?>
  </ul>
</aside>
<!--/sidebar -->