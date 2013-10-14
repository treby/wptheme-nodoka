<?php 
/**
 * single.php / is_single() : 個別ページテンプレートファイル
 *                                              2011.10.20 treby
 */
 
get_header(); ?>
<div class="container" id="content">
  <div class="row">
    <div class="col-8 col-lg-8">
      <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>
      <div class="container back_to_top">
        <?php next_post_link('＜ %link'); ?> | <a href="<?php bloginfo('url'); ?>">HOME</a> | <?php previous_post_link('%link ＞'); ?>
      </div>
    </div>
    <div class="col-4 col-lg-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
