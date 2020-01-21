<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

  <?php wp_head(); ?>
</head>
<body>
  
  <div class="navbar">
    <div class="container">
      <a href="<?php echo home_url(); ?>" class="logo">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.svg" alt="">
			</a>

      <?php 
      if(has_nav_menu('primary')) {
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => 'nav',
          'fallback_cb'    => false,
          'depth' 				 => 0
        ]);
      }
      
      ?>


    </div>
  </div>