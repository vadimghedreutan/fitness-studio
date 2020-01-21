<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
</head>
<body>
  
  <nav class="navbar">
    <div class="container">
      <a href="#" class="logo">
        <img src="img/logo.svg" alt="">
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
  </nav>

</body>
</html>