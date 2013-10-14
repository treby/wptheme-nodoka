<?php 
/**
 * home.php : home page template (exclude front-page)
 *                               2011.10.20 treby
 */
 
get_header(); ?>

<?php if (have_posts()) : ?>

<div class="content">
  <div class="container">
    <div class="blog">
      <div class="row">
        <div class="col-8 col-lg-8">
          <h2>Blog</h2>
          <hr>
          <div class="posts">
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
            <?php nodoka_paging_nav(); ?>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
