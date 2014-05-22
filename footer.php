<?php
/**
 * footer.php : footer module
 *                            2011.10.20 treby
 */

// Timezone setting
date_default_timezone_set('Asia/Tokyo');
?>
<footer>
  <div class="container">
    <div class="copy text-right">
      <h6><?php bloginfo('name'); ?></h6>
      <address>Copyright &copy; 2005-2014 Atelier NODOKA by treby(@treby006). <br />This site is powered by <a href="http://ja.wordpress.org/">WordPress</a> / <a href="http://getbootstrap.com/">Twitter Bootstrap v3.0</a> (<a href="https://wrapbootstrap.com/theme/metro-mania-no.1-metro-bootstrap-theme-WB07F9G8L">Metro Mania</a>)</address>
      <hr>
      <p>Access: <?php echo counterize_getuniqueamount(); ?> (T: <?php echo counterize_getuniquehitstoday(); ?>, Y: <?php echo counterize_getuniquehitstheday(1) ?>, 7days: <?php echo counterize_getuniquelatest7days(); ?>)</p>
    </div>
  </div>
</footer>

<!-- Scripts  -->
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
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/google-code-prettify/prettify.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js" charset="utf-8"></script>

<script>prettyPrint();</script>
<?php wp_footer(); ?>
</body>
</html>
