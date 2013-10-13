<?php 
/**
 * single.php / is_single() : 個別ページテンプレートファイル
 *                  2011.10.20 treby
 */
 
get_header(); ?>
<div id="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
    <header>
      <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    </header>
    <section>
      <?php the_content(__('続きを読む'));?>

      <?php comments_template(); ?>
    </section>
    <footer>
      <?php the_tags('Tags: '); ?> <br>
      <span class="date"><?php the_time('Y.m.d (D)'); ?></span> <?php the_time(); ?> | <a href="<?php bloginfo('url'); ?>/author/<?php the_author(); ?>/"><?php the_author(); ?></a> | <?php the_category(', '); ?>
    </footer>
  </article>
  <?php endwhile; ?><div class="back_to_top"><?php next_post_link('＜ %link'); ?> | <a href="<?php bloginfo('url'); ?>">HOME</a> | <?php previous_post_link('%link ＞'); ?></div><?php else: ?>
  <p><?php _e('お探しのページは見つかりませんでした。'); ?></p>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
