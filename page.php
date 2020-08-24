<?php get_header();  ?>

<section class="Main"id="Main" aria-label="Brief Project Description">
  <?php // Start the loop ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div class="maintext en">
     <?php the_content(); ?>
   </div>
  <div class="maintext fa">
      <?php the_field('farsi_intro_text'); ?>
  </div>
      
      <?php
      wp_reset_query();
      ?> 
</section>
<section class="allPhases">
    <section class=" phases phaseOne" id="phases">
    <h2 class="en">Phase 1- Text/Image</h2>
    <h2 class="fa">مرحله ۱ - متن/تصویر</h2>
      <?php $args = array( 'post_type' => 'post', 'cat' => 2, 'order' => 'DCS', 'posts_per_page' => -1 );
        query_posts( $args ); // hijack the main loop
        while ( have_posts() ) : the_post();
          ?>
       <a class='toggleText' href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         <?php
        endwhile;
        ?>
        <?php
        wp_reset_query();
        ?> 
    </section>
    <section class="phases phaseTwo" id="phasesTwo">
    <h2 class="en">Phase 2 - T/asks</h2>
    <h2 class="fa"> مرحله ۲ - درخواست/وظيفه </h2>
      <?php $args = array( 'post_type' => 'post', 'cat' => 1, 'order' => 'DCS', 'posts_per_page' => -1 );
        query_posts( $args ); // hijack the main loop
        while ( have_posts() ) : the_post();
          ?>
       <a class='toggleText' href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         <?php
        endwhile;
        ?>
        <?php
        wp_reset_query();
        ?> 
    </section>
    <section class="phases phaseThree" id="phasesThree">
    <h2 class="en">Phase 3 - Install</h2>
    <h2 class="fa">مرحله ۳ - سازه </h2>
      <?php $args = array( 'post_type' => 'post', 'cat' => 3, 'order' => 'DCS', 'posts_per_page' => -1 );
        query_posts( $args ); // hijack the main loop
        while ( have_posts() ) : the_post();
          ?>
       <a class='toggleText' href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         <?php
        endwhile;
        ?>
        <?php
        wp_reset_query();
        ?> 
    </section>
    <section class="phases phaseFour" id="phasesFour">
    <h2 class="en">Phase 4 - Final Installation in Room</h2>
    <h2 class="fa">مرحله ۴ - سازه در اتاق </h2>
      <?php $args = array( 'post_type' => 'post', 'cat' => 6, 'order' => 'DCS', 'posts_per_page' => -1 );
        query_posts( $args ); // hijack the main loop
        while ( have_posts() ) : the_post();
          ?>
       <a class='toggleText' href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         <?php
        endwhile;
        ?>
        <?php
        wp_reset_query();
        ?> 
    </section>
    <section class="phases phaseFive" id="phasesFive">
    <h2 class="en">Phase 5 - Bazaar Art Book Fair</h2>
    <h2 class="fa">مرحله ۵ - بازار کتاب هنری </h2>
      <?php $args = array( 'post_type' => 'post', 'cat' => 5, 'order' => 'DCS', 'posts_per_page' => -1 );
        query_posts( $args ); // hijack the main loop
        while ( have_posts() ) : the_post();
          ?>
       <a class='toggleText' href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         <?php
        endwhile;
        ?>
        <?php
        wp_reset_query();
        ?> 
    </section>
    <section class="phases phaseSix" id="phasesFive">
    <h2 class="en">Phase 6 - In Public Space</h2>
    <h2 class="fa">مرحله ۶ - در فضای عمومی </h2>
      <?php $args = array( 'post_type' => 'post', 'cat' => 7, 'order' => 'DCS', 'posts_per_page' => -1 );
        query_posts( $args ); // hijack the main loop
        while ( have_posts() ) : the_post();
          ?>
       <a class='toggleText' href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

         <?php
        endwhile;
        ?>
        <?php
        wp_reset_query();
        ?> 
    </section>
</section>
<?php endwhile; // end the loop?>

<?php get_footer(); ?>