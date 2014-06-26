<?php
/**
 * date.php : Date Archive Template
 *                     2013.10.14 treby
 */

$archive_title = 'Archives';
$archive_detail = null;

if (is_day()) {
    $archive_detail = sprintf('Daily Archives (%s)', get_the_date('Y/n/j'));
} elseif (is_month()) {
    $archive_detail = sprintf('Monthly Archives (%s)', get_the_date('Y/n'));
} elseif (is_year()) {
    $archive_detail = sprintf('Yearly Archives (%s)', get_the_date('Y'));
}

get_header();
if (have_posts()) {
    get_nodoka_content($archive_title, $archive_detail);
}
get_footer();
?>
