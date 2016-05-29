<?php
/*
	Template Name: Left Sidebar
*/
?>
<?php get_header(); ?>


<!-- THIS IS A CUSTOM PAGE TEMPLATE -->
<!-- page-sidebar-left.php naming convention is not required -->
<!-- Good idea:  Whenever you create a custom PAGE TEMPLATE, name it with page at the beginning - whatever type of page it is -->
<!-- Keeps all page templates organized in the same area -->


<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">

      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">

    		<!--  THE LOOP - START -->
		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		    
		      <h1><?php the_title(); ?></h1>      
		      <p><?php the_content(); ?></p>   
		      <hr>

  
			
			<?php endwhile; else : ?>
			
			  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
			
			<?php endif; ?>
			<!--  THE LOOP - END -->

			  <p>Custom Page Template:  page-sidebar-left<p>
		      <p class="red"> File Origin:  page-sidebar-left.php </p>   
    
		</div>
	  </div>
	

	<?php get_sidebar( 'page' ); ?>

  </div>
</section>



<?php get_footer(); ?>