<?php
/**
 * sidebar.php : sidebar module
 *                         2011.10.20 treby
 */?>
<!-- begin sidebar -->
<div class="sidebar">
<?php
global $template;
if ( function_exists('dynamic_sidebar')) {
    dynamic_sidebar(basename($template, '.php'));
}
?> 
</div>
<!-- end sidebar -->
