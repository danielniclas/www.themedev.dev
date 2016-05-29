<?php 


//  WP_Query:

//  Pagination for the Custom Posts:  4 posts per page, -1 shows all posts
//  Notice conditional statement:  is_front_page() -- if yes -> 4 posts, if no -> all posts

  $num_posts = ( is_front_page() ) ? 4 : -1;



//  This is the CUSTOM WP-Query LOOP for the CUSTOM POSTS - Starting HERE:
  $args = array(
    'post_type' => 'portfolio-cpt',
    'posts_per_page' => $num_posts
  );

  $query = new WP_Query( $args );

?>


<section class="row no-max pad">
  
  <!--  THE LOOP - START -->
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div class="small-6 medium-4 large-3 columns grid-item">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
  </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>
   <!--  THE LOOP - END -->


  <p> File Origin:  content-portfolio-cpt.php -- WP-Query Location </p> 


</section>
