<?php $contact_image = get_field('contact_image'); ?>
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
    <?php if( !empty($contact_image) ): ?>
      <img src="<?php echo $contact_image['url']; ?>"/>
    <?php endif; ?>
    </div>
  </div>
</section>

<section class="section-content-vw">
  <div class="container-width-vw">


    <div class="contact__container">
      <div class="contact__title">
        <h2>DEINE NACHRICHT AN UNS<hr></h2>
      </div>
      <form class="contact__form">
        <?php echo do_shortcode( '[contact-form-7 id="165" title="Kontakt"]' ); ?>
      </form>
    </div>

    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.505926750055!2d8.734729316026028!3d48.88669457929029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479771c3f8433397%3A0x34c362537ec4c50f!2sKaulbachstra%C3%9Fe+48%2C+75175+Pforzheim%2C+Germany!5e0!3m2!1sen!2suk!4v1565471964888!5m2!1sen!2suk" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    

  </div>
</section>

<?php get_template_part('template-parts/content', 'courses'); ?>
