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
  </div>

</section>