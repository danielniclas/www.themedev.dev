<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    


    <!--  THE LOOP - START -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
      <h1><?php the_title(); ?></h1>      
      <p><?php the_content(); ?></p>
      <hr>

  	<?php endwhile; else : ?>
  	
  	  <p><?php _e( 'Sorry, no pages found.', 'treehouse-portfolio' ); ?></p>
  	
  	<?php endif; ?>
    <!--  THE LOOP - END -->


    <p class="red"> File Origin:  page.php </p>  
    <p> The page.php template controls what static pages like the About page or Contact page look like on your WordPress site.</p> 
    <p> And then look at how to set up custom page templates for when that page.php template won't work for all of your static pages.</p>
    
    </div>
  </div>
</section>

<?php get_footer(); ?>