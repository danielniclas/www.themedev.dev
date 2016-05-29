<?php get_header(); ?>


<!-- SLUG NAME:  portfolio-cpt -->
<!-- WP Naming Convention (hierarchy):  single-$slugname.php -->

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">


    	<h1><?php the_field('description'); ?></h1>

 	<!--  THE LOOP - START -->
 	<!-- THIS IS NOT A LOOP FOR CUSTOM POST TYPES (WP_Query)  >>  This is a loop for the CONTENTS OF A SINGLE Portfolio Post -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">
    		
    			<!--  ACF -->
    			<?php the_field('images'); ?>				<!--  the_field()  IMAGES   (Specific for ACF Plugin) -->
    			<?php the_field('description'); ?>			<!--  the_field()  DESCRIPTION  (Specific for ACF Plugin) -->
    			<!--  the _field() function is SPECIFIC FOR ACF PLUGIN - this is how you call any of the custom fields you set -->
    			<!--  'images' is Field NAME (see admin panel) -->


<hr>


    			<h3>Custom Taxonomy: </h3>

				<?php

				$term = get_field('taxonomy');

				if( $term ): ?>

					<p>Custom Taxonomy - Name: <?php echo $term->name; ?></p>
					<p>Custom Taxonomy - Description: <?php echo $term->description; ?></p>


				<?php endif; ?>


<hr>

				<?php 

				$term = get_field('taxonomy');

				if( $term ): ?>

						<h4>$term = get_field('taxonomy');</h4>
						<p>$term->name:  <?php echo $term->name; ?></p>
						<p>$term->description: <?php echo $term->description; ?></p>
						<p>$term->slug: <?php echo $term->slug; ?></p>
						<p>$term->id: <?php echo $term->term_id; ?></p>
						<p>get_term_link($term):  <?php echo get_term_link( $term ); ?></p>
						<p><a href="<?php echo get_term_link( $term ); ?>">View all '<?php echo $term->name; ?>' posts</a></p>


				<?php endif; ?>





<hr>
                  <p>Custom Post by: <?php the_author_posts_link(); ?> </p>  

				  <!--  ACF  the_field() -->
				  <?php 
				    $author_id = get_the_author_meta('ID');
					$author_description = get_field('description', 'user_'. $author_id );
				  ?>
				
				  <p>Echo $author_id: <?php echo $author_id; ?> </p> 
				  <p>Echo $author_description: <?php echo $author_description; ?> </p> 
                  <p>Post Description: <?php the_field('description'); ?> </p> 
         
                  <p class="cat">in <?php the_category( ', ' ); ?></p>
                  <p class="date">on <?php the_time('F j, Y'); ?></p>


    			<hr>
    			<p class="red"> File Origin:  single-portfolio-cpt.php </p>
				<p> Custom Post >> single-$posttype.php (single-portfolio-cpt.php) </p>      		      
    
		</div>
	  </div>
	


	  <!-- Secondary Column -->
	  <div class="small-12 medium-4 medium-pull-8 columns">
		<div class="secondary">
			
			<h1><?php the_title(); ?></h1>
			<!--  ACF -->
			<p><?php the_field('description'); ?></p>    <!--  the_field()  DESCRIPTION  (Specific for ACF Plugin) -->
			<!--  the _field() function is SPECIFIC FOR ACF PLUGIN - this is how you call any of the custom fields you set -->
			<!--  'description' is Field NAME (see admin panel) -->

			<hr>

			<p>
				<?php previous_post_link(); ?> -
				<a href="<?php bloginfo('url'); ?>/portfolio-cpt-page">Back to Portfolio</a> - 
				<?php next_post_link(); ?>
			</p>

		</div>	
	  </div>
	<?php endwhile; endif; ?>
	<!--  THE LOOP - END -->


  </div>
</section>


<?php get_footer(); ?>