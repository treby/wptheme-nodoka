<?php
/**
 * 404.php : 404 Template
 *                      2014.05.14 treby
 */

get_header(); ?>
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="well c-soon">
          <div class="soon-med">ページが見つかりませんでした。</div>
          <div class="soon-big">404 <span class="color">NOT</span> FOUND.</div>
          <p class="soon-small">もしかしたら、あなたがお探しのコンテンツ（特に古めのもの）は<br /><a href="http://classic.atelier-nodoka.net<?php echo $_SERVER['REQUEST_URI'] ?>">http://classic.atelier-nodoka.net<?php echo $_SERVER['REQUEST_URI']; ?></a>にあるかもしれません。</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
