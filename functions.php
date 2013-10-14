<?php
/**
 * function.php : my functions
 *                     2011.10.20 treby
 */

/**
 * ウィジェット設定
 */
function nodoka_widgets_init() {
    $default_bw = '<aside id="%1$s" class="widget %2$s">';
    $default_aw = '</aside>';
    $default_bt = '<h4>';
    $default_at = '</h4>';

    register_sidebar( array(
        'name' => __( 'sidebar_default', 'nodoka' ),
        'id' => 'sidebar_default',
        'before_widget' => $default_bw,
        'after_widget' => $default_aw,
        'before_title' => $default_bt,
        'after_title' => $default_at,
    ) );
    
    register_sidebar( array(
        'name' => __( 'content_frontpage', 'nodoka' ),
        'id' => 'content_frontpage',
        'before_widget' => '<div class="col-6 col-sm-6 col-md-6 col-lg-6">',
        'after_widget' => "</div>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'sidebar_home', 'nodoka' ),
        'id' => 'sidebar_home',
        'before_widget' => $default_bw,
        'after_widget' => $default_aw,
        'before_title' => $default_bt,
        'after_title' => $default_at,
    ) );
    
    register_sidebar( array(
        'name' => __( 'sidebar_archive', 'nodoka' ),
        'id' => 'sidebar_archive',
        'before_widget' => $default_bw,
        'after_widget' => $default_aw,
        'before_title' => $default_bt,
        'after_title' => $default_at,
    ) );

    register_sidebar( array(
        'name' => __( 'sidebar_single', 'nodoka' ),
        'id' => 'sidebar_single',
        'before_widget' => $default_bw,
        'after_widget' => $default_aw,
        'before_title' => $default_bt,
        'after_title' => $default_at,
    ) );
}
add_action( 'widgets_init', 'nodoka_widgets_init' );

if ( ! function_exists( 'nodoka_paging_nav' ) ) :
/**
 * Displays navigation to next/previous set of posts when applicable.
 *
 * @return void
 */
function nodoka_paging_nav() {
    global $wp_query;

    // Don't print empty markup if there's only one page.
    if ( $wp_query->max_num_pages < 2 )
        return;
?>
    <nav class="paging" role="navigation">
      <?php if ( get_next_posts_link() ) : ?>
        <?php next_posts_link(__('Older', 'nodoka')); ?>
      <?php endif; ?>
      <?php if ( get_previous_posts_link() ) : ?>
        <?php previous_posts_link(__('Newer', 'nodoka')); ?>
      <?php endif; ?>
    </nav>
    <div class="clearfix"></div>
<?php
}
endif;

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
?>
