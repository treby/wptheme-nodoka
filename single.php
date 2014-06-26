<?php
/**
 * single.php : single page template
 *                             2011.10.20 treby
 */

get_header(); ?>
<div class="content">
  <div class="container">
    <div class="blog">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <div class="posts">
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part('post', get_post_format()); ?>
            <?php endwhile; ?>
            <div class="navigation button">
              <div class="pull-left">
                <?php next_post_link('%link'); ?>
              </div>
              <div class="pull-right">
                <?php previous_post_link('%link'); ?>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-4 col-sm-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
