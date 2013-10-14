<?php 
/**
 * home.php / is_home() : トップページテンプレートファイル
 *                                    2011.10.20 treby
 */
 
get_header(); ?>
<div class="jumbotron">
  <div class="container">
    <h1>Happy Hacking!!</h1>
    <p>新しくなったアトリエのどかで、どんどん情報発信！（できたらいいなぁという妄想）</p>
  </div>
</div>
<div class="container" id="content">
  <div class="row">
    
    <?php if (have_posts()) : // Recently Posts  ?>
    <div class="col-6 col-sm-6 col-md-6 col-lg-6 ndk-left-side">
      <div class="container">
      <h2>Recently Blog Update</h2>
      <p>最近のブログ更新一覧です。</p>
      <ul>
        <?php while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><?php if($post->comment_count > 0) : ?><strong><?php comments_popup_link('', 'コメント（1）', 'コメント（%）'); ?></strong><?php endif; ?>
          <ul>
            <li><?php the_time('Y.m.d (D)'); ?></span> <?php the_time(); ?> | <a href="<?php bloginfo('url'); ?>/author/<?php the_author(); ?>/"><?php the_author(); ?></a> | <?php the_category(', '); ?></li>
          </ul>
        </li>
        <?php endwhile; ?>
      </ul>
      </div>
    </div>
    <?php endif; ?>

    <div class="col-6 col-sm-6 col-md-6 col-lg-6 ndk-right-side">
      <?php get_sidebar(); ?>
    </div> 
  </div>
  <div class="row">
      <?php get_footer(); ?>
  </div>
</div>
