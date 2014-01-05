<?php
/**
 * page.php : Static page template
 *                      2011.10.20 treby
 */
 
get_header();
the_post();
?>
<div class="content">
  <div class="container">
    <div class="page">
      <div class="row">
        <div class="col-8 col-lg-8">
          <article class="entry">
            <header>
              <h2><?php the_title(); ?></h2>
            </header>
            <section>
              <?php the_content(); ?>
            </section>
          </article>
        </div>
        <div class="col-4 col-lg-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
