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
        'before_widget' => '<aside id="%1$s" class="container widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    
    register_sidebar( array(
        'name' => __( 'is_home()', 'nodoka' ),
        'id' => 'sidebar_home',
        'before_widget' => '<aside id="%1$s" class="container widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'is_archive()', 'nodoka' ),
        'id' => 'sidebar_archive',
        'before_widget' => '<aside id="%1$s" class="container widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    
    register_sidebar( array(
        'name' => __( 'is_single()', 'nodoka' ),
        'id' => 'sidebar_single',
        'before_widget' => '<aside id="%1$s" class="container widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
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
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'nodoka' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'nodoka' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'nodoka' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
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
