<?php 
/**
 * index.php - Default page template
 *                                    2011.10.20 treby
 *
 *  -site pages-
 *  View http://codex.wordpress.org/images/1/18/Template_Hierarchy.png
 *      index.php : default page
 *          404.php     : called when page not found.
 *          search.php  : search result page
 *          archive.php : archive page
 *              (taxonomy.php)
 *              category.php        : category archives
 *              (tag.php)
 *              author.php          : author archives
 *              date.php            : date archives
 *          single.php  : single post page
 *              (attachment.php)    : attachment post
 *              (single-post.php)   : blog post
 *          page.php    : static page
 *          home.php    : site front / blog posts index page
 *              (front-page.php)    : site front page
 *
 *  -include pages-
 *      header.php  : get_header($name)
 *          header-name.php
 *      sidebar.php : get_sidebar($name)
 *          sidebar-name.php
 *      footer.php  : get_footer($name)
 *          footer-name.php
 *
 *      content.php : get_template_part('content', $name);
 *          content-name.php
 *
 */
 
get_header(); ?>
<?php if (have_posts()) : ?>
<div class="jumbotron">
  <div class="container">
    <h1>Index</h1>
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
