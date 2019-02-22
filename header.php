<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <link rel="stylesheet" href="https://use.typekit.net/mnq0mjd.css">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div id="modal-id" class="modal modal-hide">
    <div class="modal-content">
      <div class="x-box">
        <span class="close-x" title="Close Modal">x</span>
      </div>
      <div class="modal-links">
        <a class="modal-link" href="<?php echo site_url('/') ?>"><?php echo get_the_title('1'); ?></a>
        <a class="modal-link" href="<?php echo get_page_link(33); ?>"><?php echo get_the_title('33'); ?></a>
        <a class="modal-link" href="<?php echo get_page_link(35); ?>"><?php echo get_the_title('35'); ?></a>
        <a class="modal-link" href="<?php echo get_page_link(38); ?>"><?php echo get_the_title('38'); ?></a>
        <a class="modal-link" href="<?php echo get_page_link(5); ?>"><?php echo get_the_title('5'); ?></a>
      </div>
    </div>
  </div>

  <header>
    <div class="header-main-div">
      <div class="hamburger-container">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
      <div class="left-header-section">
        <a class="header-link" href="<?php echo site_url('/') ?>"><?php echo get_the_title('1'); ?></a>
        <a class="header-link" href="<?php echo get_page_link(33); ?>"><?php echo get_the_title('33'); ?></a>
        <a class="header-link" href="<?php echo get_page_link(35); ?>"><?php echo get_the_title('35'); ?></a>
      </div>
      <div class="middle-header-section">
        <h1 class="header-heading"><a style="text-decoration:none; color:white;" href="<?php echo site_url('/'); ?>">Julian Addison</a></h1>
      </div>
      <div class="right-header-section">
        <a class="header-link" href="<?php echo get_page_link(38); ?>"><?php echo get_the_title('38'); ?></a>
        <a class="header-link" href="<?php echo get_page_link(5); ?>"><?php echo get_the_title('5'); ?></a>
      </div>
    </div>
  </header>