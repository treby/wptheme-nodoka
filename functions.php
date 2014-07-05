<?php
/**
 * function.php : my functions
 *                     2011.10.20 treby
 */

// {{{ nodoka_scripts_init 
/**
 * 読み込むリソースの設定
 */
function nodoka_scripts_init()
{
    // {{{ Styles
    wp_deregister_style('counterize_stylesheet');
    wp_enqueue_style(
        'font-opensans',
        $src = 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600'
    );
    wp_enqueue_style(
        'nodoka',
        $src = get_stylesheet_uri()
    );
    // }}}

    // {{{ Scripts
    wp_deregister_script('jquery');
    wp_enqueue_script(
        'jquery',
        $src = '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
        $deps = [],
        $ver = false,
        $in_footer = true
    );
    wp_enqueue_script(
        'code-prettify',
        $src = get_template_directory_uri() . '/js/google-code-prettify/prettify.js',
        $deps = [],
        $ver = false,
        $in_footer = true
    );
    wp_enqueue_script(
        'tw-bootstrap',
        $src = get_template_directory_uri() . '/js/bootstrap.min.js',
        $deps = ['jquery'],
        $ver = false,
        $in_footer = true
    );
    wp_enqueue_script(
        'nodoka',
        $src = get_template_directory_uri() . '/js/nodoka.js',
        $deps = ['code-prettify'],
        $ver = false,
        $in_footer = true
    );
    // }}}
}
add_action('wp_enqueue_scripts', 'nodoka_scripts_init');
// }}}

// {{{ nodoka_widgets_init
/**
 * ウィジェット設定
 */
function nodoka_widgets_init()
{
    $sidebar_names  = [
        'default',
        'home',
        'archive',
        'single'
    ];

    foreach ($sidebar_names as $name) {
        register_sidebar( [
            'name' => __( $name, 'nodoka' ),
            'id' => 'sidebar_' . $name,
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ] );
    }
}
add_action('widgets_init', 'nodoka_widgets_init');
// }}}

// {{{ nodoka_paging_nav
/**
 * Displays navigation to next/previous set of posts when applicable.
 *
 * @return void
 */
function nodoka_paging_nav()
{
    global $wp_query;

    // Don't print empty markup if there's only one page.
    if ( $wp_query->max_num_pages < 2 ) {
        return;
    }

    $next_posts_link = get_next_posts_link();
    $previous_posts_link = get_previous_posts_link();

    echo '<div class="paging">';
    echo "{$previous_posts_link}{$next_posts_link}";
    echo '</div><div class="clearfix"></div>';
}
// }}}

// {{{ get_nodoka_content
/**
 * Get common content.
 *
 * @return void
 */
function get_nodoka_content($title = null, $description = null, $post_slug = null)
{
    $title_element = '';
    if (isset($title)) {
        $title_element = sprintf('<h2>%s</h2>', $title);
        if (isset($description)) {
            $title_element .= sprintf('<p class="big grey">%s</p>', $description);
        }
        $title_element .= '<hr />';
    }

    echo '<div class="content">';
    echo '  <div class="container">';
    echo '    <div class="blog">';
    echo '      <div class="row">';
    echo '        <div class="col-md-8 col-sm-8">';
    echo $title_element;
    echo '          <div class="posts">';
    while (have_posts()) {
        the_post();
        get_template_part('post', get_post_format());
    }
    nodoka_paging_nav();
    echo '          </div>';
    echo '        </div>';
    echo '        <div class="col-md-4 col-sm-4">';
    get_sidebar();
    echo '        </div>';
    echo '      </div>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
}
// }}}

// {{{ get_nodoka_counter
/**
 * Get counter.
 *
 * @return void
 */
function get_nodoka_counter()
{
    $count_all = counterize_getuniqueamount();
    $count_today = counterize_getuniquehitstoday();
    $count_yesterday = counterize_getuniquehitstheday(1);
    $count_7days = counterize_getuniquelatest7days();

    printf(
        'Access: %s (T: %s, Y: %s, 7days: %s)',
        $count_all,
        $count_today,
        $count_yesterday,
        $count_7days
    );
}
// }}}

// {{{ counterize_getuniquehitstheday
/**
 * Get unique hits the day (for Counterize II)
 *
 * @returns int - 1 day unique user count.
 */
function counterize_getuniquehitstheday($daysago)
{
    global $wpdb;

    $aftertheday =  date("Y-m-d",strtotime("-".($daysago - 1)." day"));
    $theday =  date("Y-m-d",strtotime("-".$daysago." day"));
    $sql = "SELECT COUNT(DISTINCT ip) FROM ".counterize_logTable()." WHERE timestamp >= '$theday' AND timestamp < '$aftertheday' ";
    return $wpdb->get_var($sql);
}
// }}}

remove_filter('the_content', 'wpautop');
?>
