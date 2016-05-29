<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">


      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">
    

          <div class="leader">
            <h1>archive.php Posts by: <?php wp_title(''); ?></h1>
            <p> FILE: archive.php</p>
          </div>

<!-- CUSTOM POSTS - START  -->


      <?php 

      //  This is the CUSTOM WP-Query LOOP for the CUSTOM POSTS - Starting HERE:
        $args = array(
          'post_type' => 'portfolio-cpt',
          'posts_per_page' => -1
        );

        $query = new WP_Query( $args );

      ?>


      <section class="row no-max pad">
        
        <!--  THE LOOP - START -->
        <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <div class="small-6 medium-4 large-3 columns grid-item">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          Author:  <?php the_field('author'); ?> </br>
          <?php the_time('F j, Y'); ?>


              <!-- ACF:  Get Field -->
              <?php
              $term = get_field('taxonomy');
              if( $term ): ?>
                <p>Tax: <?php echo $term->name; ?></p>
                 
       
              <?php endif; ?>

        </div>

        <?php endwhile; endif; wp_reset_postdata(); ?>
         <!--  THE LOOP - END -->
         <hr>
         <p class="red"> File Origin:  archive.php -- WP-Query Location </p> 

      </section></br></br>


<!-- CUSTOM POSTS - END  -->




          <div class="leader">
            <h1> Blog Posts by: <?php wp_title(''); ?></h1>
          </div>





		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <article class="post">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>
                <ul class="post-meta no-bullet">
                  <li class="author">
                      <span class="wpt-avatar small">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                      </span>
                      by <?php the_author_posts_link(); ?>                    
                  </li>
                  <li class="cat">in <?php the_category( ', ' ); ?></li>
                  <li class="date">on <?php the_time('F j, Y'); ?></li>
                </ul>    
                <?php if( get_the_post_thumbnail() ) : ?>
                <div class="img-container">
                  <?php the_post_thumbnail('large'); ?>
                </div>  
                <?php endif; ?>          	
              </article>
     
			
			<?php endwhile; else : ?>
			
			  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
			
			<?php endif; ?>
      
      <hr>   
      <p> File Origin:  archive.php </p>

		</div>
	  </div>
	
        <?php get_sidebar(); ?>

  </div>
</section>





<?php get_footer(); ?>