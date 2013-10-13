<?php 
/**
 * 404.php / is_404() : Not Foundテンプレートファイル
 *                                    2011.10.20 treby
 */
 
get_header(); ?>
<div id="content_only">
  <div id="the_content">
    <header>
      <h1>404 Not Found</h1>
    </header>
    <section>
      <h1>お探しのページは見つかりませんでした。</h1>
      <h2>お試しください。</h2>
      <p>もしかしたら、あなたがお探しのコンテンツは<a href="http://classic.atelier-nodoka.net<?php echo $_SERVER['REQUEST_URI'] ?>">http://classic.atelier-nodoka.net<?php echo $_SERVER['REQUEST_URI']; ?></a>にあるかもしれません。</p>
      <h2>お知らせ</h2>
      <p>「アトリエのどか」は2011年10月23日に大幅なシステム更新を行いました。<br>
                その影響でリンク切れが多数発生していると考えられています。ご迷惑をおかけします。</p>
    </section>
  </div>
</div>
<?php get_footer(); ?>
