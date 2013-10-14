<?php
/**
 * footer.php / get_footer() : フッターモジュール
 *                                    2011.10.20 treby
 */

// Timezone setting
date_default_timezone_set('Asia/Tokyo');
?>

<hr>
<footer class="container">
  <div class="copy">
    <h6><?php bloginfo('name'); ?></h6>
    <address>Copyright &copy; 2005-2013 Atelier NODOKA, All rights reserved. This site is powered by <a href="http://ja.wordpress.org/">WordPress</a> / Twitter Bootstrap v3.0</address>
  </div>
</footer>

<?php // analytics code ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23931320-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js" charset="utf-8"></script>
<?php wp_footer(); ?>
</body>
</html>
