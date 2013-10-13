<?php
/**
 * author.php / is_author() : プロフィールページテンプレートファイル
 *                                    2011.10.20 treby
 */
 
get_header(); ?>
<div id="content_only">
  <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
    <h1><?php the_author_meta('nickname', $author) ?>の情報</h1>
    <div class="entry-content">
      <p><?php the_author_meta('description', $author) ?></p>
    </div>
  </article>
</div>
<?php get_footer(); ?>
