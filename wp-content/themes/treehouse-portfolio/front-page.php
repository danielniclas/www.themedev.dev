<?php get_header(); ?>


<!-- front-page.php is the PRIMARY HIERARCHY for SITE FRONT PAGE!!!! -->



<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    
    <!--  THE LOOP - START -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>  
      <hr>   


	  <?php endwhile; endif; ?>
	  <!--  THE LOOP - END -->

	  <p>The page permalink: <?php the_permalink(); ?></p> 
      <p>The page ID:  <?php the_id(); ?></p>    
      <hr>
      <p class="red"> File Origin:  front-page.php </p>   
      <p class="red"> front-page.php is top of WP HIERARCHY Template for Home Pages </p>  
    </br>
      <p> below are the portfolio-cpt POSTS:  content-portfolio-cpt (see php file)</p>
      <hr>


        <p>LIST of ALL Custom Post Types:</p>

        <?php
            $args = array(
               'public'   => true,
               '_builtin' => false,
            );


            $output = 'names'; // names or objects, note names is the default
            $operator = 'and'; // 'and' or 'or'

            $post_types = get_post_types( $args, $output, $operator );  ?>

 
            <?php
            foreach ( $post_types  as $post_type ) {
            echo '<h2>' . $post_type . '</h2>';
            ?>

            <ul>

           <?php 

            $argss = array(
              // 'post_type' => 'portfolio-cpt'     //  portfolio-cpt is the CUSTOM POST TYPE
              'post_type' => $post_type             //  $post_type   is the CUSTOM POST TYPE Variable
            );

            $query = new WP_Query( $argss );


           if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

             <li> <?php the_title(); ?> </li>
         
           <?php endwhile; endif; wp_reset_postdata(); ?>         <!--  THE LOOP - END -->

            </ul>

            <?php
            }   //  foreach END
            ?>

      <hr>
    </div>
  </div>

</section>

<!-- Get Content from content-portfolio.php - FILE WITH WP-Query -->
<!-- THIS IS LIKE A PHP INCLUDE FUNCTION with a few tweeks for WP    1.  slug of the URL  2.  what comes after the hyphen  'content-portfolio'  -->
<?php get_template_part('content', 'portfolio-cpt'); ?>

<?php get_footer(); ?>