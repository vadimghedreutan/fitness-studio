<?php $ang_image = get_field('angebot_image'); ?>
<section class="section-content">
    <div class="container">
      <div>
        <?php
        while ( have_posts() ) :
          the_post();
          the_content();
        endwhile; 
        ?>
      </div>
      <div>
      <?php if( !empty($ang_image) ): ?>
        <img src="<?php echo $ang_image['url']; ?>"/>
      <?php endif; ?>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/content', 'price'); ?>