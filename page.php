<?php
/**
 * page.php / is_page() : 固定ページテンプレートファイル
 *									2011.10.20 treby
 */
 
get_header(); ?>
	<section id="content_only">
		<?php the_post(); ?>
		<div id="the_content">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<section>
				<?php the_content(); ?>
			</section>
			<footer>
				<?php the_date(); ?> 更新
			</footer>
		</div>
		<div class="back_to_top"><a href="<?php bloginfo('url') ?>">HOME</a></div>
	</section>
<?php get_footer(); ?>