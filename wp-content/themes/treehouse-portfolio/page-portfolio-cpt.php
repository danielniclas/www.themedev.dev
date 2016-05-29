<?php 
/* 
  Template Name: Portfolio-CPT Page
*/
?>


<!-- THIS IS A CUSTOM TEMPLATE -->


<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    



    <!--  THE LOOP - START -->
    <!-- LOOP for ACTUAL PORTFOLIO PAGE - Default content for Portfolio Page - Entered into Admin Console -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    
      <h1><?php the_title(); ?></h1> 
      <?php the_content(); ?>
	
  	<?php endwhile; endif; ?>
    <!--  THE LOOP - END -->




    <hr>
    <p class="red"> File Origin:  page-portfolio-cpt.php </p>
    <p> Page Template >>  Custom Template >> page-$slug.php </p>
    <p> This File call on get_template_part('content', portfolio-cpt) -- content-portfolio-cpt.php </p>

    
    </div>
  </div>
</section>

  <!-- Get Content from content-portfolio.php - FILE WITH WP-Query -->
  <!-- THIS IS LIKE A PHP INCLUDE FUNCTION with a few tweeks for WP    1.  slug of the URL  2.  what comes after the hyphen  'content-portfolio'  -->
  <?php get_template_part('content', 'portfolio-cpt'); ?>


<?php get_footer(); ?>