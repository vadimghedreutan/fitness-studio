  <!-- Section Courses -->
  <section class="section-courses">
    <div class="container">
      <h2>DEINE HERAUSFORDERUNG AUF 1.700 M² FLÄCHE:</h2>
      <div class="section-courses__gallery">

      <?php $loop = new WP_Query( array( 'post_type' => 'courses', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

      <?php while($loop->have_posts() ) : $loop->the_post(); ?>

      <?php $courses_title = get_field('courses_title'); ?>
      <?php $courses_image = get_field('courses_image'); ?>

          
        <a href="#" class="section-courses__big">
          <img src="<?php echo $courses_image['url']; ?>" alt=""/>
          <span class="section-courses__big-title"><?php echo $courses_title; ?></span>
        </a>
        

        <?php endwhile; ?>
      </div>
    </div>
  </section>