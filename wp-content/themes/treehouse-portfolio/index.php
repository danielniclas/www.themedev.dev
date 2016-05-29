
<?php get_header(); ?>     <!--  Calls header.php  -->



<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">




    <!--  THE WP LOOP - START -->

    <!-- LOOP Start:  if content is available? -->
    <!-- While LOOP:  Execute as long as there's code or conetent to be displayed -->


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>  

	
	  <?php endwhile; else : ?>
	
	  <p><?php _e( 'Sorry, no results found.', 'treehouse-portfolio' ); ?></p>
	
	  <?php endif; ?>

    <!--  THE LOOP - END -->




     <p style="color: red"> File Origin:  index.php </p>  
    
    </div>
  </div>
</section>



<?php get_footer(); ?>    <!--  Calls footer.php  -->
