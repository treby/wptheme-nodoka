<?php 
/**
 * front-page.php : front page
 *                         2013.10.14 treby
 */
 
get_header(); ?>
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="da-slider" class="da-slider">
          <div class="da-slide">
            <div class="da-blue">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top.jpg" style="width:100%;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container">
      <?php
        if ( function_exists('dynamic_sidebar')) {
            dynamic_sidebar('content_frontpage');
        }
      ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
