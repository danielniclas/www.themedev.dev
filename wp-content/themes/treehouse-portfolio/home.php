<?php get_header(); ?>


<!-- home.php  IS FIRST IN LINE for BLOG POSTS >>  CHECK HIERARCHY!-->


<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">


      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">




        <!--  THE LOOP - START -->
		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


              <article <?php post_class('post'); ?>>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>           <!--  get_the_excerpt()  only shows a fragment -->
                <ul class="post-meta no-bullet">
                  <li class="author">
                      <span class="wpt-avatar small">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                      </span>
                      by xx <?php the_author_posts_link(); ?>                    
                  </li>
                  <li class="cat">in xx <?php the_category( ', ' ); ?></li>
                  <li class="date">on xx <?php the_time('F j, Y'); ?></li>       <!--  better than the_date() -->
                </ul>  

                <?php if( get_the_post_thumbnail() ) : ?>
                <div class="img-container">
                  <?php the_post_thumbnail('medium'); ?>
                </div> 

                <?php endif; ?>          	
              </article>
     
			     <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
           <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

			<?php endwhile; else : ?>


			
			  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
			
			<?php endif; ?>
      <!--  THE LOOP - END -->



      <hr>
      <p class="red"> File Origin:  home.php </p>
      
    
		</div>
	  </div>
	
	  <?php get_sidebar(); ?>

  </div>



</section>





<?php get_footer(); ?>