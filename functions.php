<?php
/**
 * function.php / is_page() : テーマ使用関数ファイル
 *                                    2011.10.20 treby
 */

/**
 * ウィジェット設定
 */
function nodoka_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Default', 'nodoka' ),
        'id' => 'sidebar_default',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    
    register_sidebar( array(
        'name' => __( 'is_home()', 'nodoka' ),
        'id' => 'sidebar_home',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'is_archive()', 'nodoka' ),
        'id' => 'sidebar_archive',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    
    register_sidebar( array(
        'name' => __( 'is_single()', 'nodoka' ),
        'id' => 'sidebar_single',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'nodoka_widgets_init' );

// for Counterize II
function counterize_getuniquehitstheday($daysago) {
    global $wpdb;

    $aftertheday =  date("Y-m-d",strtotime("-".($daysago - 1)." day"));
    $theday =  date("Y-m-d",strtotime("-".$daysago." day"));
    $sql = "SELECT COUNT(DISTINCT ip) FROM ".counterize_logTable()." WHERE timestamp >= '$theday' AND timestamp < '$aftertheday' ";
    return $wpdb->get_var($sql);
}
?>
