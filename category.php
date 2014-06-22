<?php 
/**
 * category.php : Category Archive Template
 *                     2013.10.14 treby
 */

get_header();

if (have_posts()) {
    get_nodoka_content(
        single_cat_title('Category: ', false),
        category_description()
    );
}

get_footer();
?>
