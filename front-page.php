<?php
/**
 * front-page.php : front page
 *                         2013.10.14 treby
 */
get_header(); ?>
<div class="content">
  <div class="container">
    <div id="da-slider" class="da-slider" style="margin-bottom: 1em;">
      <div class="da-slide">
        <div class="da-blue">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top.jpg" class="img-responsive">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-sm-6 col-md-6 col-lg-6">
        <h2>Recently Updated</h2>
        <ul>
        <?php
          $recent_posts = wp_get_recent_posts(['post_status' => 'publish']);
          $recent_post_month = null;

          foreach($recent_posts as $post) {
            $permalink = get_permalink($post['ID']);
            $posted_month = date('Y年m月', strtotime($post['post_date']));

            if ($recent_post_month != $posted_month) {
              if (isset($recent_post_month)) {
                echo "</ul></li>";
              }
              echo "<li>{$posted_month}<ul>";
              $recent_post_month = $posted_month;
            }

            echo "<li>";
            echo "&nbsp;<a href=\"{$permalink}\">{$post['post_title']}</a>";
            echo "<a href=\"http://b.hatena.ne.jp/entry/{$permalink}\">";
            echo "<img src=\"http://b.hatena.ne.jp/entry/image/{$permalink}\" alt=\"はてなブックマーク - {$post['post_title']}\" title=\"はてなブックマーク - {$post['post_title']}\">";
            echo "</a>";
            echo "</li>";
          }

          echo '<li style="text-align: right;"><a href="blog">More...</a>';
        ?>
        </ul>
      </div>

      <div class="col-6 col-sm-6 col-md-6 col-lg-6">
        <h2>Twitter</h2>
        <a class="twitter-timeline" data-chrome="noheader nofooter transparent" href="https://twitter.com/treby006" data-widget-id="345941662981304321">@treby006 からのツイート</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    </div>
    <div class="border"></div>
  </div>
</div>
<?php get_footer(); ?>
