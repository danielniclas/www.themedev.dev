<?php 


//  WP_Query:

//  Pagination parameter for the Custom Posts:  4 posts per page
//  LIMIT the number of posts to show on FRONT PAGE (4) or PORTFOLIO PAGE (ALL:  -1)
//  number of items to loop through in WP_Query

  $num_posts = ( is_front_page() ) ? 4 : -1;



//  This is the CUSTOM WP-Query >> LOOP for CUSTOM POST TYPES (with CUSTOM FIELDS) - Starting HERE:
//  ARRAY to pass parameters to WP_Query
  $args = array(
    'post_type' => 'portfolio-cpt',     //  portfolio-cpt is the CUSTOM POST TYPE
    'posts_per_page' => $num_posts
  );

  $query = new WP_Query( $args );

?>


<section class="row no-max pad">
  
  <!--  THE  WP_QUERY LOOP - START -->
  <!-- LOOP for CUSTOM POST TYPES    LOOP for CUSTOM POST TYPES    LOOP for CUSTOM POST TYPES    LOOP for CUSTOM POST TYPES -->
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>


  <div class="small-6 medium-4 large-3 columns grid-item">
    <!--  ACF:  the_field() -->
    <!-- Gather CUSTOM FIELD DATA >> -->
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>   <!--  the_post_thumbnail('large') >> FEATURED IMAGE for the custom portfolio post type -->
    <p style="margin-bottom: 3px;"> Author:  <?php the_field('author'); ?> </p>     <!--  the_field()  AUTHOR  (Specific for ACF Plugin) -->
    <p> Posted On:  <?php the_field('posting_date'); ?> </p>                        <!--  the_field()  POSTING DATE  (Specific for ACF Plugin) -->
  </div>

 
  <?php endwhile; endif; wp_reset_postdata(); ?>
   <!--  THE LOOP - END -->

</section>

<p class="red" style="margin: 15px;"> File Origin:  content-portfolio-cpt.php -- WP-Query Location </p> 
