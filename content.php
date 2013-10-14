<?php
/**
 * content-aside.php : 投稿テンプレート
 *                                              2013.10.14 treby
 */
?>
<article class="container" id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
  <header>
    <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
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
