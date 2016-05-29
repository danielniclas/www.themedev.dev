<!doctype html>
<html class="no-js" lang="en">
  


  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>      <!--  End of head, pull in any additional content (plug-ins etc)  << wp_enqueue_style() go here - functions.php  -->

  </head>



  <!--  Add body_class() - For dealing with the Admin Bar - Adds markup to the body tag - like being logged in  --> 
  <body <?php  body_class(); ?>>

  <header class="row no-max pad main">

  <h1><a class='current' href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?> [header.php bloginfo('name')] </a></h1>

  <a href="" class="nav-toggle"><span></span>Menu</a>


  <nav>

    <!--  NAVIGATION - wp_nav_man()  FUNCTION -->

    <h1 class="open"><a class='current' href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>

      

    <?php 

      $defaults = array(
        'container' => false,
        'theme_location'  => 'primary-menu',
        'menu_class'  => 'no-bullet'
      );

      //  This line creates the MENU:
      wp_nav_menu( $defaults );

    ?>


<!--
    <ul class="no-bullet">
      <li class="current parent"><a class='current' href="index.html">Portfolio</a>
        <ul class="sub-menu">
          <li><a href="item.html">Portfolio Item</a></li>
          <li><a href="item.html">Portfolio Item</a></li>
          <li><a href="item.html">Portfolio Item</a></li>
          <li><a href="item.html">Portfolio Item</a></li>
        </ul>
      </li>
      <li class="parent"><a href="blog.html">Blog</a>
        <ul class="sub-menu">
          <li><a href="single-post.html">Single Post</a></li>
          <li><a href="author.html">Author Page</a></li>
        </ul>
      </li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
-->

  </nav>
</header>

<p class="red" style="margin-left: 20px;"> File Origin:  header.php </p>