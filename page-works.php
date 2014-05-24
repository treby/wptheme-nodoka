<?php
/**
 * page-works.php : Works page template
 *                      2014.05.24 treby
 */

$works_img_base = get_template_directory_uri() . '/img/works/book/';
get_header();

$works_book_list = [
    '01' => [
        'title' => 'とわにいのりし',
        'specific' => 'B5 / 20P / オフセット',
        'published_at' => '2005年11月23日',
        'event' => 'コミックシティ福岡13',
        'description' => 'サークル処女作となる『うたわれるもの』パロディ漫画。',
    ],
    '02' => [
        'title' => 'ひとりごと。-ホロと行く異郷の町-',
        'specific' => 'B5 / 34P / オンデマンド',
        'published_at' => '2009年12月30日',
        'event' => 'コミックマーケット77',
        'post' => ['url' => '/2009/12/c77-information/', 'title' => 'C77 出展情報'],
        'description' => '著者が行動を起こす際の基本思考を記したポエム本。',
    ],
    '03' => [
        'title' => '2010年春 シンガポール7泊9日のしおり',
        'specific' => 'B5 / 50P / オンデマンド',
        'published_at' => '2010年8月15日',
        'event' => 'コミックマーケット78',
        'post' => ['url' => '/2010/08/c78-information/', 'title' => 'C78 出展情報'],
        'description' => '身内向けのシンガポール旅行本。わっち成分豊富。',
    ],
    'C1' => [
        'title' => '『恋と選挙とチョコレート』舞台訪問レポート(2010/12/28実行分)',
        'specific' => 'A5 / 20P / コピー本',
        'published_at' => '2010年12月31日',
        'event' => 'コミックマーケット79',
        'post' => ['url' => '/2011/09/koichoco-junrei/', 'title' => '恋と選挙とチョコレート 舞台訪問'],
        'description' => '冬コミに伴う上京時に行った恋チョコ舞台訪問の記録。',
    ],
    '04' => [
        'title' => 'FeliCaでスタンプラリー -基礎から学ぶ？RFID-',
        'specific' => 'B5 / 66P / オンデマンド / CD付属',
        'published_at' => '2010年12月31日',
        'event' => 'コミックマーケット79',
        'post' => ['url' => '/2010/12/c79-information/', 'title' => 'C79 出展情報'],
        'description' => 'ソニーの非接触IC通信方式の技術であるFeliCaを使ってスタンプラリーシステムを構築するまでを描く。',
    ],
    '05' => [
        'title' => 'FeliCaでスタンプラリー2',
        'specific' => 'B5 / 78P / オンデマンド / CD付属',
        'published_at' => '2011年8月13日',
        'event' => 'コミックマーケット80',
        'post' => ['url' => '/2011/08/c80-information/', 'title' => 'C80 出展情報 v1.0'],
        'description' => '前作の内容補強版。章立てを見直した他、システム開発全般について記述。',
    ],
    '06' => [
        'title' => 'わっち三昧',
        'specific' => 'B5 / 44P / オンデマンド',
        'published_at' => '2011年12月31日',
        'event' => 'コミックマーケット81',
        'post' => ['url' => '/2011/11/c81-information/', 'title' => 'C81 出展情報 v1.0'],
        'description' => '所有のわっちグッズや関連事象について一冊にまとめた本。原作完結による一種の区切り的位置づけ。',
    ],
    '07' => [
        'title' => 'はじめてのNFC',
        'specific' => 'B5 / 18P / オンデマンド',
        'published_at' => '2012年4月28日',
        'event' => 'ニコニコ超会議内「ニコつく2」',
        'post' => ['url' => '/2012/04/nicotsuku2-information2/', 'title' => 'ニコつく2 出展情報・改訂版'],
        'description' => 'FeliCaからのNFC展開を図るべくタイトルをつけてみたものの、諸事情により文字通り「薄い本」となってしまった一冊。表紙の気合と中身のギャップに悩み、<a href="/wp-content/dojin/sample/07.pdf">内容はウェブで全文公開</a>している。',
    ],
    '08' => [
        'title' => 'ながてぃ～の。で遊んでみた ～ArduinoでNFC～',
        'specific' => 'B5 / 70P / オフセット',
        'published_at' => '2012年8月11日',
        'event' => 'コミックマーケット82',
        'post' => ['url' => '/2012/07/c82-information/', 'title' => 'C82 出展情報'],
        'description' => '電子工作になじみのなかった筆者がArduinoについて調べ物をしたり、ArduinoとNFC R/Wを使って作品を作ったりしたときの記録を載せた本。電子工作が初めての方を対象としている。',
    ],
    '09' => [
        'title' => 'NFCハンドブック～Android×FeliCa編～',
        'specific' => 'A5 / 46P / オフセット',
        'published_at' => '2013年12月31日',
        'event' => 'コミックマーケット85',
        'post' => ['url' => '/2012/12/c83-information/', 'title' => 'C83 出展情報'],
        'description' => 'A5サイズ初挑戦ということでタイトルにハンドブックの名を冠しているが、実際には読み物成分が多め。NFCやFeliCaの生い立ちを学ぶのに適している一冊。',
    ],
    '10' => [
        'title' => 'NFC Shield Hacks',
        'specific' => 'A5 / 32P / オフセット',
        'published_at' => '2013年8月12日',
        'event' => 'コミックマーケット85',
        'post' => ['url' => '/2013/08/c84-information/', 'title' => 'C84 出展情報と今後の出展活動'],
        'description' => 'Arduinoの拡張ボードであるNFC Shieldについて調べた本。',
    ],
    '11' => [
        'title' => 'アトリエのどか式Git入門',
        'specific' => 'A5 / 28P / オフセット',
        'published_at' => '2013年12月31日',
        'event' => 'コミックマーケット85 (委託)',
        'post' => ['url' => '/2013/12/c85-information/', 'title' => 'C85 委託情報'],
        'description' => '就職後一年で大分使い方を覚えたGitについての本。',
    ],
];

$works_book_list = array_reverse($works_book_list, $preserve_keys = true);

?>
<div class="content">
  <div class="container">
    <h2>Works</h2>
    <p class="big grey">作品の紹介</p>
    <hr />

    <div class="row">

      <?php foreach($works_book_list as $number => $book) : ?>
      <div class="col-md-3 col-sm-3" style="margin-bottom: 1em;">
        <div style="box-shadow: 0 4px 6px rgba(0,0,0,0.5);">
          <a data-toggle="modal" data-target="#nodoka-<?php echo $number; ?>">
            <img src="<?php echo $works_img_base . $number; ?>.jpg" style="width: 100%;">
          </a>
        </div>
        <div id="nodoka-<?php echo $number; ?>" class="modal fade" tabindex="-1" data-dismiss="modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" style="border-radius: 6px;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $book['title']; ?></h4>
                <p><?php echo $book['description']; ?></p>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4 col-sm-4" style="margin-bottom: 1em;">
                    <img src="<?php echo $works_img_base . 't_' . $number; ?>.jpg" class='img-responsive'>
                  </div>
                  <div class="col-md-8 col-sm-8">
                    <table class="table table-striped">
                      <tbody>
                        <tr><th>本の仕様</th><td><?php echo $book['specific']; ?></td></tr>
                        <tr><th>発行日</th><td><?php echo $book['published_at']; ?></td></tr>
                        <tr><th>発行イベント</th><td><?php echo $book['event']; ?></td></tr>
                        <?php if(isset($book['post'])): ?>
                        <tr>
                          <th>関連記事</th>
                          <td><a href="<?php echo $book['post']['url']; ?>"><?php echo $book['post']['title']; ?></a></td>
                        </tr>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="border"></div>
  </div>
</div>

<?php
get_footer();
?>
