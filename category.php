<?php 
/**
 * category.php : Category Archive Template
 *                     2013.10.14 treby
 */

get_header(); ?>

<?php if (have_posts()) : ?>
<div class="content">
  <div class="container">
    <div class="blog">
      <div class="row">
        <div class="col-8 col-lg-8">
          <h2><?php single_cat_title('Category: '); ?></h2>
            <?php if (category_description() ) : ?>
              <p class="big grey"><?php category_description(); ?></p>
            <?php endif; ?>
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
