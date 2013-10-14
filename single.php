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
        <div class="col-8 col-lg-8">
          <div class="posts">
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
            <div class="container">
              <?php next_post_link('＜ %link'); ?> | <a href="<?php bloginfo('url'); ?>">HOME</a> | <?php previous_post_link('%link ＞'); ?>
            </div>
          </div>
        </div>
        <div class="col-4 col-lg-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
