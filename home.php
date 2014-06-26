<?php
/**
 * home.php : home page template (exclude front-page)
 *                               2011.10.20 treby
 */

get_header();

if (have_posts()) {
    get_nodoka_content();
}

get_footer();
?>
