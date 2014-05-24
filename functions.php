<?php
/**
 * function.php : my functions
 *                     2011.10.20 treby
 */

// {{{ nodoka_widgets_init
/**
 * ウィジェット設定
 */
function nodoka_widgets_init() {
    $sidebar_names  = array(
        'default',
        'home',
        'archive',
        'single'
    );

    foreach ($sidebar_names as $name) {
        register_sidebar( array(
            'name' => __( $name, 'nodoka' ),
            'id' => 'sidebar_' . $name,
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ) );
    }
}
add_action( 'widgets_init', 'nodoka_widgets_init' );
// }}}

// {{{ nodoka_paging_nav
if ( ! function_exists( 'nodoka_paging_nav' ) ) :
/**
 * Displays navigation to next/previous set of posts when applicable.
 *
 * @return void
 */
function nodoka_paging_nav() {
    global $wp_query;

    // Don't print empty markup if there's only one page.
    if ( $wp_query->max_num_pages < 2 ) {
        return;
    }

    $next_posts_link = get_next_posts_link();
    $previous_posts_link = get_previous_posts_link();

    echo '<nav class="paging" role="navigation">';
    echo "{$previous_posts_link}{$next_posts_link}";
    echo '</nav><div class="clearfix"></div>';
}
endif;
// }}}

// {{{ counterize_getuniquehitstheday
if ( ! function_exists( 'counterize_getuniquehitstheday' )) :
/**
 * Get unique hits the day (for Counterize II)
 *
 * @returns int - 1 day unique user count.
 */
function counterize_getuniquehitstheday($daysago) {
    global $wpdb;

    $aftertheday =  date("Y-m-d",strtotime("-".($daysago - 1)." day"));
    $theday =  date("Y-m-d",strtotime("-".$daysago." day"));
    $sql = "SELECT COUNT(DISTINCT ip) FROM ".counterize_logTable()." WHERE timestamp >= '$theday' AND timestamp < '$aftertheday' ";
    return $wpdb->get_var($sql);
}
endif;
// }}}

?>
