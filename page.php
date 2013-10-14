<?php
/**
 * page.php : Static page template
 *                      2011.10.20 treby
 */
 
get_header(); ?>
<div class="content">
  <div class="container">
    <?php the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <hr>

    <div>
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
