<section class="section-content-b">
  <div class="container">
    
    <div>
    <?php
			while ( have_posts() ) :
        the_post();
        the_content();
      endwhile; 
		?>
    </div>
    <div class="metaslider-shadow">
      <?php echo get_field('dance_slider'); ?>
    </div>
  </div>

</section>

<?php get_template_part('template-parts/content', 'courses'); ?>