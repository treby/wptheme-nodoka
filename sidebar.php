<?php
/**
 * sidebar.php / get_sidebar() : サイドバーモジュール
 *                                    2011.10.20 treby
 */?>
<!-- begin sidebar -->
<?php if (is_front_page()) :?>
  <div class="container">
  <?php
    if ( function_exists('dynamic_sidebar')) {
      dynamic_sidebar('content_frontpage');
    }
  ?>  
  </div>
<?php else : ?>
  <div class="sidebar">
  <?php
    if ( function_exists('dynamic_sidebar')) {
      if (is_home())       dynamic_sidebar('sidebar_home');
        elseif (is_single())     dynamic_sidebar('sidebar_single');
        elseif (is_archive())    dynamic_sidebar('sidebar_archive');
        else dynamic_sidebar('sidebar_default');
    }
  ?>  
  </div>
<?php endif; ?>
<!-- end sidebar -->
