<?php
/**
 * page-history.php : History page template
 *                      2014.05.19 treby
 */

get_header();
?>
<div class="content">
  <div class="container">
    <h2>Profile</h2>
    <p class="big grey">作っている人について</p>
    <hr />
    <div class="aboutus">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="col-l">
                <div class="pic">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/profile-treby.jpg" class="img-responsive">
                </div>
              </div>
              <div class="col-r">
                <div class="sinfo">
                  <h4>treby (とれびぃ)</h4>
                  <h6>Web Engineer</h6>
                  <div class="social">
                    <a href="https://twitter.com/treby006" class="tip" data-original-title="Twitter">
                      <i class="fa fa-twitter twitter"></i>
                    </a>
                    <a href="https://github.com/treby" class="tip" data-original-title="GitHub">
                      <i class="fa fa-github facebook"></i>
                    </a>
                    <a href="http://www.slideshare.net/treby" class="tip" data-original-title="SlideShare">
                      <i class="fa fa-th google-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="col-md-6 col-sm-6">
              <p class="ainfo">
                1988年2月福岡生まれ。就職を機に上京した2013年まで福岡で育つ。
                福岡が恋しいとぼやく一方で、悲しいかな順応している自分自身に気づく今日この頃。
                いろいろ思うところはありつつも何とかやれている毎日に感謝をしたい。<br />
                学生時代は情報工学やプロジェクト管理を勉強する傍ら、
                コミケ出展や勉強会開催などの課外活動に力を入れる。
                現在は都内Web企業でエンジニアとして働く。現在、主に使っている言語はRuby, JavaScript, PHPなど。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="border"></div>
  </div>
</div>

<?php
get_footer();
?>
