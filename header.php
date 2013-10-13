<?php
/**
 * header.php / get_header() : ヘッダーモジュール
 *									2011.10.20 treby
 */?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="robots" content="follow, all">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' -'; } ?> <?php bloginfo('name'); ?></title>

<!--	<link rel="Shortcut Icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>">
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>">

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/highslide/highslide.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/highslide/highslide.config.js" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/highslide/highslide.css" />
	<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/highslide/highslide-ie6.css" />
	<![endif]-->
<?php //wp_get_archives('type=monthly&format=link'); ?>

	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23931320-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

	</script>

	<?php wp_head(); ?>
</head>
<body>
	<div id="for_classic_ie"><strong style="color:red">お使いのバージョンのIEでは、サイトが上手く表示されないことが判明しています。最新バージョンのIE(version 9以降)か、他のブラウザ(Firefox, Chromeなど)をご利用ください。ご迷惑をおかけして申し訳ありません。</strong></div>
	<header<?php if($_SERVER['REQUEST_URI'] == '/') echo ' id="header_home"'; ?>>
		<hgroup>
			<h1><a href="<?php bloginfo('url'); ?>/" title="ホームへ"><img src="<?php echo bloginfo('template_directory').'/images/logo.png'?>" alt="<?php bloginfo('name'); ?>"></a></h1>
			<h2><?php bloginfo('description') ?></h2>
		</hgroup>
		<nav>
			<ul>
				<li><a href="<?php echo get_settings('home'); ?>/">Home</a></li>
				<?php wp_list_pages('title_li=&deqpth=1&exclude=487,2281'); ?>
			</ul>
		</nav>
	</header>
