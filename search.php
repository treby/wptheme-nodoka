<?php 
/**
 * search.php / is_search() : 検索結果ページテンプレートファイル
 *                                                  2011.10.20 treby
 */

get_header(); ?>
<div id="content_only">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <h3><?php the_time('M'); ?></h3>
  <h4><?php the_time('j'); ?></h4>
  <?php endwhile; wp_pagenavi(); endif; ?>
</div>
<?php get_footer(); ?>
