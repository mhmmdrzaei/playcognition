<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2 class="en">Egret Egress Task Generator</h2>
        <h2 class="fa">تولید کننده تكليف</h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

      <section class="center">
      	<button onclick="newQuote()" class="quotebutton en">Generate New Task</button>
      	<section class="innerQute en" id="quoteDisplay">
      		
      	</section>
      </section>
      <section class="center farsiCenter">
      	<button onclick="newQuoteFA()" class="quotebutton fa">ایجاد بازی جدید</button>
      	<section class="innerQute fa" id="quoteDisplayFa">
      		
      	</section>
      </section>




    </div> <!-- /,content -->



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>