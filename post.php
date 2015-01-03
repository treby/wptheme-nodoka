<?php
/**
 * post.php : the post template
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
    <span class='pull-right' style='margin-top:3px;;'>
      <a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button"
         data-hatena-bookmark-title="<?php the_title('', " | " . get_bloginfo('name')); ?>" data-hatena-bookmark-layout="simple-balloon"
         title="このエントリーをはてなブックマークに追加">
        <img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" />
      </a>
      <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
      <a href="https://twitter.com/share" class="twitter-share-button"
         data-url="<?php the_permalink(); ?>" data-text="<?php the_title('', " | " . get_bloginfo('name')); ?>">
        Tweet
      </a>
      <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
      </script>
    </span>
  </div>
  <div class="entry-main">
    <?php the_content(__('続きを読む'));?>
  </div>
</div>
