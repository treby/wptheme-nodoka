<?php 
/**
 * 404.php : 404 Template
 *                      2011.10.20 treby
 */
 
get_header(); ?>
<div class="jumbotron" id="the_content">
  <div class="container">
    <h1>Oops!!</h1>
    <p>"404 Page not found." is detected.</p>
  </div>
</div>
<div class="container">
  <h2>ページが見つかりませんでした。</h2>
  <p>もしかしたら、あなたがお探しのコンテンツ（特に古めのもの）は<a href="http://classic.atelier-nodoka.net<?php echo $_SERVER['REQUEST_URI'] ?>">http://classic.atelier-nodoka.net<?php echo $_SERVER['REQUEST_URI']; ?></a>にあるかもしれません（ないかもしれません）。</p>
</div>
<?php get_footer(); ?>
