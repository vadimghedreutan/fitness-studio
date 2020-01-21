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

  <?php $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>
  <section class="section-overview" style="background:url('<?php echo $thumbnail_url; ?>') center center/cover; background-color: #010102; ">
  
  </section>
  
  <section class="section-caption-over">
    <div class="container">
      <div class="section-caption-over__text">
          <h3><?php echo the_title(); ?></h3>
      </div>
    </div>
  </section>