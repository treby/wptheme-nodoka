<?php
/**
 * header.php : header module
 *                      2011.10.20 treby
 */

$page_title = wp_title('', false);
$blog_name = get_bloginfo('name');
$title = empty($page_title) ? $blog_name : "$page_title | $blog_name";

$excerpt = get_the_excerpt();
$description = empty($excerpt) ? get_bloginfo('description') : $excerpt;

echo '<!DOCTYPE html>';
?>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="follow, all">
  <title><?php echo htmlspecialchars($title); ?></title>

<!--  <link rel="Shortcut Icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">-->

  <meta property="twitter:card" content="summary" />
  <meta property="twitter:site" content="@treby006" />
  <meta property="twitter:title" content="<?php echo htmlspecialchars($title); ?>" />
  <meta property="twitter:description" content="<?php echo htmlspecialchars($description); ?>" />
  <meta property="twitter:url" content="<?php the_permalink(); ?>" />

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>">
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>">
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>">

  <?php wp_head(); ?>
</head>
<body>
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-5 col-md-5">
        <div class="logo">
          <h1>
            <a href="<?php bloginfo('url') ?>">
              Atelier <span class="color">NODOKA</span>
            </a>
          </h1>
          <div class="hmeta">Your future hasn't been written yet.</div>
        </div>
      </div>

      <div class="col-sm-offset-2 col-sm-5 col-md-offset-3 col-md-4">
        <div class="form text-right">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="navbar" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li><a href="<?php bloginfo('url') ?>">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/works">Works</a></li>
        <li><a href="/blog">Blog</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Other
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/profile">Profile</a></li>
            <li><a href="/history">History</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
