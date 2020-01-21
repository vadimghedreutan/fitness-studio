<section class="section-hero">
    <?php $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) ); ?>
    <div class="section-hero__image" style="background:url('<?php echo $thumbnail_url; ?>') center center/cover; background-color: #010102; ">

      <!-- <div class="section-hero__info">
        <h4>STARTE</h4>
        <h4>JETZT!</h4>
      </div> -->

      <div class="section-hero__info-v2">
        <h4>Liebe Mitglieder,</h4>
        <p>bitte beachten Sie unsere besonderen Öffnungszeiten an Weihnachten uns Silvester:</p>
        <ul>
          <li>24. Dezember / Heiligabend - <strong>9:00 - 15:00</strong></li>
          <li>25 Dezember / 1. Weihnachtstag - <strong>geschlossen</strong></li>
          <li>26 Dezember / 2. Weihnachtstag - <strong>geschlossen</strong></li>
          <li>31 Dezember / Silvester - <strong>geschlossen</strong></li>
          <li>1 Januar / Silvester - <strong>geschlossen</strong></li>
        </ul>
      </div>

    </div>
  </section>
  <section class="section-caption">
    <div class="container">
      <div class="section-caption__text">
          <h3>SEI STÄRKER ALS DEINE STÄRKSTE AUSREDE</h3>
      </div>
    </div>
  </section>

  <section class="section-wellcome">
    <div class="container">
      <div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/shutterstock.jpg" alt="">
      </div>
      <div>
      
      <?php
			while ( have_posts() ) :
        the_post();
        the_content();
      endwhile; 
			?>
        <a href="/fitnesstime-local/kursplan/">
          <button class="btn hvr-grow ">KURSPLAN</button>
        </a>
      </div>
    </div>
  </section>

  <!-- Overlay text -->
  <section class="section-dance">
    <div class="overlay">
      <div class="section-dance__inner">
        <h3>POLE DANCE</h3>
        <h2>KURSE NEU IN PFORZHEIM, AKROBATISCH, ÄSTHETISCH UND ATEMBERAUBEND</h2>
        <a href="/fitnesstime-local/pole-dance/">
          <button class="btn hvr-grow ">ERFAREN SIE MEHR</button>
        </a>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/content', 'courses'); ?>