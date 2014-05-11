<?php 
/**
 * front-page.php : front page
 *                         2013.10.14 treby
 */
get_header(); ?>
<div class="content">
  <div class="container">
    <div id="da-slider" class="da-slider" style="margin-bottom: 1em;">
      <div class="da-slide">
        <div class="da-blue">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top.jpg" style="width:100%;">
        </div>
      </div>
    </div>
    <div class="row">
      <?php
        if ( function_exists('dynamic_sidebar')) {
            dynamic_sidebar('content_frontpage');
        }
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
