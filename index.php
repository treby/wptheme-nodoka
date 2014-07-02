<?php 
/**
 * index.php - Default page template
 *                                    2011.10.20 treby
 *
 *  -site pages-
 *  View http://codex.wordpress.org/images/1/18/Template_Hierarchy.png
 *      index.php : default page
 *          404.php     : called when page not found.
 *          search.php  : search result page
 *          archive.php : archive page
 *              (taxonomy.php)
 *              category.php        : category archives
 *              (tag.php)
 *              author.php          : author archives
 *              date.php            : date archives
 *          single.php  : single post page
 *              (attachment.php)    : attachment post
 *              (single-post.php)   : blog post
 *          page.php    : static page
 *          home.php    : site front / blog posts index page
 *              front-page.php      : site front page
 *
 *  -include pages-
 *      header.php  : get_header($name)
 *          header-name.php
 *      sidebar.php : get_sidebar($name)
 *          sidebar-name.php
 *      footer.php  : get_footer($name)
 *          footer-name.php
 *
 *      content.php : get_template_part('content', $name);
 *          content-name.php
 *
 */

get_header();

if (have_posts()) {
    get_nodoka_content('Index');
}

get_footer();
?>
