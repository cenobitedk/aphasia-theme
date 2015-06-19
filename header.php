<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <title><?php wp_title('|', TRUE, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?> 
    <meta property="og:image" content="http://aphasia-records.com/img/og-image.jpg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <meta property="fb:admins" content="530872406" />
</head>
<body <?php body_class(); ?>>
<div class="wrapper">  
  <div id="header">
    <div class="container_16 container_header_top clearfix">
      <div class="grid_16">
	  <?php get_template_part('custom', 'header'); ?>
      </div>
    </div>
    
    <div id="nav">
      <div class="container_16 clearfix">
        <div class="grid_16">
          <?php vortex_primary_menu(); ?>
        </div>
      </div>
    </div>
  </div>