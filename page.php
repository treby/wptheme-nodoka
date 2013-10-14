<?php
/**
 * page.php : Static page template
 *                      2011.10.20 treby
 */
 
get_header(); ?>
<section class="container">
  <?php the_post(); ?>
  <div>
    <header>
      <h1><?php the_title(); ?></h1>
    </header>
    <section>
      <?php the_content(); ?>
    </section>
    <footer>
      <?php the_date(); ?> Updated.
    </footer>
  </div>
</section>
<?php get_footer(); ?>
