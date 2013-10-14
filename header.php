<?php
/**
 * header.php / get_header() : ヘッダーモジュール
 *                                    2011.10.20 treby
 */?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="follow, all">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>

<!--  <link rel="Shortcut Icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">-->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>">
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>">
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>">

  <?php //wp_get_archives('type=monthly&format=link'); ?>
  <?php wp_head(); ?>
</head>
<body>
<header>
  <div class="container">
    <div class="row">
      <div class="logo col-sm-4 col-md-4">
        <h1>
          <a href="<?php bloginfo('url') ?>">Atelier <span class="color">NODOKA</span></a>
        </h1>
        <div class="hmeta">Your future hasn't been written yet.</div>
      </div>

      <div class="col-sm-offset-2 col-sm-6 col-md-offset-3 col-md-5">
        <?php get_search_form(); ?>
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
        <?php wp_list_pages('title_li=&deqpth=1&exclude=487,2281'); ?>
      </ul>
    </nav>
  </div>
</div>
