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
      <address>
        Copyright &copy; 2005-2014 Atelier NODOKA by treby(@treby006). <br />
        This site is powered by <a href="http://ja.wordpress.org/">WordPress</a>
        /
        <a href="http://getbootstrap.com/">Twitter Bootstrap v3.0</a>
        (<a href="https://wrapbootstrap.com/theme/metro-mania-no.1-metro-bootstrap-theme-WB07F9G8L">Metro Mania</a>)
      </address>
      <hr>
      <p><?php get_nodoka_counter(); ?></p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
