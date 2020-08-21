<?php get_header(); ?>
<section class="secondaryMenu en">
 <div class= "toggle"> 
  <h4 class="en toggle-trigger"><i class="far fa-folder"></i> Phase 1- Text/Image</h4>
   <h4 class="fa toggle-trigger"><i class="far fa-folder"></i> مرحله ۱ - متن/تصویر </h4>
   <div class="phaseOne toggle-content">
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
   </div>
 </div>
<div class="toggle">  
  <h4 class="en toggle-trigger"><i class="far fa-folder"></i> Phase 2 - T/asks</h4>
  <h4 class="fa toggle-trigger"><i class="far fa-folder"></i> مرحله ۲ - درخواست/وظيفه </h4>
  <div class="phaseTwo toggle-content">
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
  </div>
</div>
<div class="toggle">  
  <h4 class="en toggle-trigger"><i class="far fa-folder"></i> Phase 3 - Install</h4>
  <h4 class="fa toggle-trigger"><i class="far fa-folder"></i> مرحله ۳ - سازه </h4>
  <div class="phaseThree toggle-content">
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
  </div>
</div>
<div class="toggle">  
  <h4 class="en toggle-trigger"><i class="far fa-folder"></i> Phase 4 - Final Installation in Room</h4>
  <div class="phaseFour toggle-content">
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
  </div>
</div>
<div class="toggle">  
  <h4 class="en toggle-trigger"><i class="far fa-folder"></i> Phase 5 - Bazaar Art Book Fair</h4>
  <div class="phaseFive toggle-content">
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
  </div>
</div>
<div class="toggle">  
  <h4 class="en toggle-trigger"><i class="far fa-folder"></i> Phase 6 - In Public Space</h4>
  <div class="phaseSix toggle-content">
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
      <p>coming soon</p>
  </div>
</div>
  
</section>
<section class="secondaryMenu fa smfa">
 <div class= "toggle"> 
   <h4 class="fa toggle-trigger"><i class="far fa-folder"></i> مرحله ۱ - متن/تصویر </h4>
   <div class="phaseOne emFA toggle-content">
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
   </div>
 </div>
<div class="toggle">  
  <h4 class="fa toggle-trigger"><i class="far fa-folder"></i> مرحله ۲ - درخواست/وظيفه </h4>
  <div class="phaseTwo emFA toggle-content">
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
  </div>
</div>
<div class="toggle"> 
  <h4 class="fa toggle-trigger"><i class="far fa-folder"></i> مرحله ۳ - سازه </h4>
  <div class="phaseThree emFA toggle-content">
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
  </div>
</div>
<div class="toggle">  
  <h4 class="fa toggle-trigger"><i class="far fa-folder"></i> مرحله ۴ - سازه در اتاق </h4>
  <div class="phaseFour emFA toggle-content">
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
  </div>
</div>
<div class="toggle">  
  <h4 class="fa toggle-trigger"><i class="far fa-folder"></i> مرحله ۵ - بازار کتاب هنری</h4>
  <div class="phaseFive emFA toggle-content">
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
  </div>
</div>
<div class="toggle">  
  <h4 class="fa toggle-trigger"><i class="far fa-folder"></i> مرحله ۶ - در فضای عمومی</h4>
  <div class="phaseSix emFA toggle-content">
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
      <p>coming soon</p>
  </div>
</div>
  
</section>


<div class="main">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h3 style="text-align: center;"><?php the_title(); ?></h3>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>


          <?php if( have_rows('file_order') ): ?>
              <?php while( have_rows('file_order') ): the_row(); ?>
                  <?php if( get_row_layout() == 'image_galleryOne' ): ?>
                    <?php 
                    $images = get_sub_field('images_gallery');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $images ): ?>
                            <?php foreach( $images as $image_id ): ?>

                                    <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                            <?php endforeach; ?>
                    <?php endif; ?>

                    <?php elseif ( get_row_layout() == 'embedded_video' ): ?>
                      <div class="embed-container">
                      <?php the_sub_field('embedded_link'); ?>
                      </div>



                  <?php elseif( get_row_layout() == 'video_or_audio' ): 
                      ?>
                      <?php if( have_rows('va_add') ): ?>


                        <?php while( have_rows('va_add') ): the_row(); 

                          // vars
                          $filetype = get_sub_field('va_file_type');
                          $content = get_sub_field('upload_file');
                          $link = get_sub_field('file_extension');

                          ?>

                          <<?php echo $filetype; ?> controls>
                            <source src="<?php echo $content; ?>" type="<?php echo $filetype; ?>/<?php echo $link; ?>">
                          Your browser does not support the video tag.
                          </<?php echo $filetype; ?>>

                        <?php endwhile; ?>



                      <?php endif; ?>
                  <?php elseif( get_row_layout() == 'file' ): 
                      ?>
                      <?php
                      $file = get_sub_field('other_file_downloads');
                      if( $file ): ?>
                          <a href="<?php echo $file['url']; ?>" target="_blank"><i class="far fa-file"></i> <?php echo $file['filename']; ?></a>
                      <?php endif; ?>

                  <?php endif; ?>
              <?php endwhile; ?>
          <?php endif; ?>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->
</div> <!-- /.main -->

<?php get_footer(); ?>