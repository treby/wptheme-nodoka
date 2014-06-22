<?php
/**
 * search.php : Search result template
 *                                                  2011.10.20 treby
 */

get_header();
if (have_posts()) {
    get_nodoka_content('Search results', get_search_query());
} else {
    echo '<div class="content">';
    echo '  <div class="container">';
    echo '    <div class="blog">';
    echo '      <div class="row">';
    echo '        <div class="col-md-8 col-sm-8">';
    echo '          <h2>Search results</h2>';
    echo '          <p class="big grey">'.get_search_query().'</p>';
    echo '          <hr />';
    echo '          <div class="container">何も見つかりませんでした。</div>';
    echo '        </div>';
    echo '        <div class="col-md-4 col-sm-4">';
    get_sidebar();
    echo '        </div>';
    echo '      </div>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
}
get_footer();
?>
