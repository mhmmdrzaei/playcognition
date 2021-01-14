<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2 class="en">Egret Egress Task Generator</h2>
        <h2 class="fa">تولید کننده تكليف</h2>
        <div class="en">
        <?php the_content(); ?>	
        </div>
        <div class="fa">
        	<p>سلام و ممنون از کنجکاویتون،</p>
        	<p>با زدن این دگمه یک  درخواست/وظیفه  به صورت اتفاقی براتون میاد. با فرستادن هرجور اطّلاعاتی از چگونگی انجامش برای ما به از طریق ایمیل، میتونید یک  درخواست/وظیفه  طراحی کنید و برای ما بفرستید تا به این مخزن اضافه کنیم برای نفرات یا دفعات دیگه.</p>
        	<a href="mailto:cognitionplay@gmail.com">cognitionplay(at)gmail(dot)com</a>
        	<p>با مشارکتتون، در شکل دادن و گسترش  بازی/تمرین  سهیم بشن.</p>
        	<ul>
        		<li>اطّلاعات مربوط به نحوۀ انجام، میتونه به صورت فایل تصویری، صوتی، عکس و یا نوشته و یا ترکیبی از این موارد باشه.</li>
        		<li>سعی کنید حجم فایل‌ها زیاد نباشه تا هم فرستادنشون برای شما و هم گرفتنشون برای ما آسون‌تر بشه.</li>
        		<li>اطّلاعات نحوۀ انجام در اختیار عموم گذاشته میشه. پس هرچند ما سعی می‌کنیم راه‌ها رو محدود کنیم، ولی یا نسبت به حق مادی و معنوی فایل‌های ارسالیتون حساس نباشید و یا اون چیزی رو بفرستید که نسبت به حقوقش نگران نیستین.</li>
        		<li>اطّلاعات شخصی، مثل آدرس ایمیلتون پیش ما محفوظ میمونه مگر این که خودتون بخایین به مشخصاصتون در وبسایت منتشر بشه.</li>
        		<li>هم در اطّلاعات نحوۀ انجامتون و هم در مورد  درخواست/وظیفه  ای که طراحی می‌کنید و میفرستید، از هرگونه تبعیض و خشونت و یا تشویق و ترویج این موارد پرهیز کنین. برای حفظ استمرار و امنیّت این پروژه ناچار به بررسی قبل از بارگذاری هستیم.</li>
        	</ul>

        </div>
        

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