<section class="section-classes">
    <div class="container-width">
      <h3 class="section-classes__title">FITNESSTIME KLASSES</h3>
    </div>
    <div class="container">

    <?php $loop = new WP_Query( array( 'post_type' => 'classes', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

      <?php while($loop->have_posts() ) : $loop->the_post(); ?>

      <?php $classes_title = get_field('classes_title'); ?>
      <?php $classes_content = get_field('classes_content'); ?>

    
      <div class="box">
        <h3 class="box__title"><?php echo $classes_title; ?></h3>
        <p class="box__content"><?php echo $classes_content; ?></p>
      </div>
  

      <?php endwhile; ?>

    </div>
  </section>