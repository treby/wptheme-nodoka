<?php
/**
 * content.php : the content template
 *                                2013.10.14 treby
 */
?>
<div class="entry" id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
  <h2>
    <a href="<?php the_permalink() ?>">
      <?php the_title(); ?>
    </a>
  </h2>
  <div class="meta">
    <span class="fa fa-calendar"></span>
    <?php the_time('Y-m-d'); ?>
    &nbsp;<span class="fa fa-user"></span>
    <?php the_author(); ?>
    &nbsp;<span class="fa fa-folder-open"></span>
    <?php the_category(', '); ?>
    <?php
      $the_tags = get_the_tags();
      $font_awesome_class = count($the_tags) > 1 ? 'fa-tags' : 'fa-tag';

      if ($the_tags) {
        echo sprintf('&nbsp;<span class="fa %s"></span>', $font_awesome_class);
        the_tags('', ', ', '');
      }
    ?>
  </div>
  <div class="entry-main">
    <?php the_content(__('続きを読む'));?>
  </div>
</div>
