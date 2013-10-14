<?php 
/**
 * date.php : Date Archive Template
 *                     2013.10.14 treby
 */

get_header(); ?>

<?php if (have_posts()) : ?>
<div class="jumbotron">
  <div class="container">
    <h1><?php
        if (is_day()) {
            printf( __('Daily Archives: %s', 'nodoka'), get_the_date() );
        } elseif (is_month()) {
            printf( __('Monthly Archives: %s', 'nodoka'), get_the_date('Y.n'));
        } elseif (is_year()) {
            printf( __('Yearly Archives: %s', 'nodoka'), get_the_date('Y'));
        } else {
            _e('Archives', 'nodoka');
        }
        ?></h1>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-8 col-sm-8 col-md-8 col-lg-8">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>
      <?php nodoka_paging_nav(); ?>
    </div>
    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php else : ?>
<div class="container">
  <p><?php _e('お探しのページは見つかりませんでした。'); ?></p>
</div>
<?php endif; ?>
<?php get_footer(); ?>
