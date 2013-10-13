<?php
/**
 * sidebar.php / get_sidebar() : サイドバーモジュール
 *									2011.10.20 treby
 */?>
<!-- begin sidebar -->
	<div id="sidebar">
	<?php
		if ( function_exists('dynamic_sidebar')) {
			if(is_home()) {
				if($_SERVER['REQUEST_URI'] == '/') dynamic_sidebar('sidebar_home');
				else dynamic_sidebar('sidebar_archive');
			} elseif(is_single()) dynamic_sidebar('sidebar_single');
		//	elseif(is_page()): dynamic_sidebar('sidebar_page');
		//	elseif(is_author()): dynamic_sidebar('sidebar_author');
			elseif(is_archive()) dynamic_sidebar('sidebar_archive');
		//	elseif(is_search()): dynamic_sidebar('sidebar_search');
		//	elseif(is_404()): dynamic_sidebar('sidebar_404');
			else dynamic_sidebar('sidebar_default');
		}
	?>
	
	</div>
<!-- end sidebar -->
