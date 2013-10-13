<?php 
/**
 * 基本ページテンプレートファイル
 *                                    2011.10.20 treby
 *
 *    is_home()        - home.php : トップページのテンプレート
 *    (is_front_page())
 *    is_404()        - 404.php : 404ページのテンプレート
 *    is_search()     - search.php : 検索結果ページのテンプレート
 *    is_archive()    - archive.php : アーカイブページのテンプレート
 *        is_author()        - author.php : プロフィールページのテンプレート
 *        is_category()    - category.php : カテゴリーページのテンプレート
 *        is_tag()        - tag.php : タグページのテンプレート
 *        (is_tax())
 *    is_single()        - single.php : 個別ページのテンプレート
 *    is_attachment()    - attachment.php : 添付ファイルページのテンプレート
 *    is_page()        - page.php : 固定ページのテンプレート
 *
 * View http://codex.wordpress.org/images/1/18/Template_Hierarchy.png
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
    </section>
    <footer>
      <!-- 投稿日時、投稿者、タグ、カテゴリ -->
      <?php the_tags('Tags: '); ?> <br>
      <span class="date"><?php the_time('Y.m.d (D)'); ?></span> <?php the_time(); ?> | <a href="<?php bloginfo('url'); ?>/author/<?php the_author(); ?>/"><?php the_author(); ?></a> | <?php the_category(', '); ?>
      <?php if($post->comment_count > 0) : ?> | <strong><?php comments_popup_link('', 'コメント（1）', 'コメント（%）'); ?></strong><?php endif; ?>
    </footer>
  </article>
  <?php endwhile; if($_SERVER['REQUEST_URI'] == '/'): ?><div class="top-more"><a href="/page/2/">さらに前の投稿</a></div><?php else: wp_pagenavi(); endif; else: ?>
    <p><?php _e('お探しのページは見つかりませんでした。'); ?></p>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
