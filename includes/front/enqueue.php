<?php

function fde_enqueue() {

  $ver = FDE_DEV_MODE ? time() : false;


  wp_register_style('fde_google_oswald' , 'https://fonts.googleapis.com/css?family=Oswald:400,600&display=swap', [], $ver);
  wp_register_style('fde_icons' , 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', [], $ver );
  
  wp_enqueue_style('fde_google_oswald');
  wp_enqueue_style('fde_icons');
  
  
  wp_register_style('fde_style', get_template_directory_uri() . '/assets/scss/style.css', [], $ver);
  
  wp_enqueue_style('fde_style');
  
  }
