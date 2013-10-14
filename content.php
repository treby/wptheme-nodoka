<?php
/**
 * content.php : the content template
 *                                2013.10.14 treby
 */
?>
    <article class="entry" id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
      <header>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <div class="meta">
          <span class="icon-calendar"></span>
          <?php the_time('Y-m-d'); ?>
          <span class="icon-user"></span>
          <?php the_author(); ?>
          <span class="icon-folder-open"></span>
          <?php the_category(', '); ?>
        </div>
      </header>
      <section>
        <?php the_content(__('続きを読む'));?>

        <?php comments_template(); ?>
      </section>
    </article>
