<?php 
/**
 * search.php : Search result template
 *                                                  2011.10.20 treby
 */

get_header(); ?>
<div class="content">
  <div class="container">
    <div class="blog">
      <div class="row">
        <div class="col-8 col-lg-8">
          <h2>Search Results</h2>
          <p class="big grey">for "<?php echo get_search_query(); ?>"</p>
          <hr>
          <?php if (have_posts()) : ?>
            <div class="posts">
              <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
              <?php endwhile; ?>
              <?php nodoka_paging_nav(); ?>
            </div>
          <?php else: ?>
            <div class="container">
              <p>Sorry, we couldn't find any articles.</p>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
