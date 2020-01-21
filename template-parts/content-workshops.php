<?php $box_image_left = get_field('box_image_left'); ?>
<?php $box_image_right = get_field('box_image_right'); ?>

<section class="section-content">
  <div class="container-custom">
    
    <div>
    <?php if( !empty($box_image_left) ): ?>
      <img src="<?php echo $box_image_left['url']; ?>"/>
    <?php endif; ?>
    </div>
    <div>
    <?php if( !empty($box_image_right) ): ?>
      <img src="<?php echo $box_image_right['url']; ?>"/>
    <?php endif; ?>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/content', 'courses'); ?>
