<?php
    // Add this to all your php files for added security

    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    ?>


    <?php get_header(); ?>
    <?php // this function loads the header.php file ?>

    <h1><?php the_title(); ?></h1>
  
  <!-- opening flex-container will go here -->

  <div class="flex-container">
  <main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php 
          if ( have_posts() ) : 
          while ( have_posts() ) : the_post();
              the_content();
          endwhile;
      else :
          _e( 'Sorry, no posts matched your criteria.', 'karlaguinea' );
      endif;
      ?>
  </main>
      <!-- START STEP 2.22 ADD SIDEBAR -->

      <?php get_sidebar(); ?>

<!-- END STEP 2.22 ADD SIDEBAR -->
    </div>
  <!-- closing flex-container will go here -->

  <?php get_footer(); ?>
  <?php // this function loads the footer.php file ?>