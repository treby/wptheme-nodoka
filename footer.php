<?php
/**
 * footer.php / get_footer() : フッターモジュール
 *                                    2011.10.20 treby
 */?>
 
<footer>
  <?php date_default_timezone_set('Asia/Tokyo'); // Hack:タイムゾーンの指定 ?>
  <?php echo counterize_getuniqueamount(); ?> hits since Oct 2011.(T: <?php echo counterize_getuniquehitstoday(); ?>, Y: <?php echo counterize_getuniquehitstheday(1) ?>, 7days: <?php echo counterize_getuniquelatest7days(); ?>)<br>
  <address>Copyright &copy; 2005-2012 <a href="<?php bloginfo('url'); ?>/">Atelier NODOKA</a> / Hajime Madoromi(treby).</address>Powered by <a href="http://ja.wordpress.org/">WordPress</a><br>
</footer>

<?php wp_footer(); ?>
</body>
</html>
