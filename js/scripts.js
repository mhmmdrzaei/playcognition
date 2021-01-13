$(function(){

	console.log("It's working");
	$('.englishClick').click(function(){
	$('.fa').css( "display", "none" );
	$('.en').css( "display", "block" );
	$(this).css( "text-decoration", "line-through" );
	$('.farsiClick').css( "text-decoration", "none" );
});
$('.farsiClick').click(function(){
	$('.en').css( "display", "none" );
	$('.fa').css( "display", "block" );
	$(this).css( "text-decoration", "line-through" );
	$('.englishClick').css( "text-decoration", "none" );
});

// Find the toggles and hide their content
	$('.toggle').each(function(){
		$(this).find('.toggle-content').hide();
	});

	// When a toggle is clicked (activated) show their content
	$('.toggle .toggle-trigger').click(function(){
		var el = $(this), parent = el.closest('.toggle');

		if( el.hasClass('active') )
		{
			parent.find('.toggle-content').slideToggle();
			el.removeClass('active');
		}
		else
		{
			parent.find('.toggle-content').slideToggle();
			el.addClass('active');
		}
		return false;
	});


});

var tasksEng = [
"Call your mother or think about her while reading a poem for her. <br><img src=\"http://playcognition.live/images/picture6.png\">",
"Find a spot in your neighborhood or city where you could sit and relax for a bit, where you can escape the daily tension and gather your thoughts. Take photo of this location and share the coordinates for others to enjoy.",
"Open a book and select some random words then write a short story with them.",
"If you\’re a smoker, empty your ashtray first thing in the morning. At the end of the night after smoking your last cigarette, take a picture of your ashtray vertically. <br>If you’re not a smoker, wash any dishes in your sink first thing in the morning. At the end of the night take a picture of the dishes left in the sink.",
"Press your right pinky finger with your left hand. Increase the intensity of this pressure and focus on the sensation. Try to cry and think about the reality of the pressure. <br>* This task must be done outdoors.",
"When facing this screen, rub the palms of your hands together. With the warmth created through friction, put your warm hand on to any areas of pain. If you\’re will willing, send pictures of these areas. <br><img src=\"http://playcognition.live/images/picture5.png\">",
"Open a book and select random words from the pages. Then write a short story with them.",
"Take an hour (or more) out of your day to pay attention to the incidental arrangements formed around you. Take short videos of the odd arrangements of non-related objects that you find satisfying. ",
"Go for a walk. Instead of looking at the sky, look to the ground as much as you can.<br>Find any holes on the gravel filled with water. Get close till you see your reflection.<br>Take a picture of your reflection with your phone on Autofocus mode. <br><img src=\"http://playcognition.live/images/picture4.png\">",
"Write down some of your habits.<br>Try to break one of the habits for a week<br>Pleasant or not, do not share your experience with anyone. <br><img src=\"http://playcognition.live/images/Picture3.png\">",
"If possible, try not to speak for 24 hours<br>Do not talk. Do not type. Do not even let your ears hear anyone\'s voice<br> (as much as possible)<br>You will be alone with your thoughts<br>Write down your thoughts and analyze them <br>talk to everyone about this experience the next day. <br><img src=\"http://playcognition.live/images/Picture2.png\">",
"REMIND A LOVED ONE THAT YOU LOVE THEM  <br><img src=\"http://playcognition.live/images/Picture1.png\">",
"With what\’s around you at home, build a temporary fort. Use it to spend your day in solitude. Sleep in the fort at night."

]


var tasksFa = [
"همین حالا به مادرت زنگ بزن و یا بهش فکر کن و براش یک قطعه شعر بخوان <br><img src=\"http://playcognition.live/images/picture6.png\">",
"یک نقطه ی امن در محله یا محیط شهری زندگی خود که در آن احساس راحتی می‌کنید و با نشستن در آن نقطه آرامش می‌یابید را انتخاب کرده، از آن محیط عکس بگیرید و همراه با لوکیشن آن نقطه ما و یک شخص دیگر که دوست دارید ارسال کنید .",
"یک کتاب را باز کن. تعدادی از کلماتش را انتخاب کن و با آن ها یک داستان کوتاه بنویس.",
"(اگر سیگاری هستی) اول روز جاسیگاریت رو خالی کن و آخر شب بعد از کشیدن آخرین نخ، از بالا بصورت عمودی یک عکس ازش بگیر.<br>(اگر سیگاری نیستی) اول صبح اگر ظرفی تو سینک هست بشور و آخر شب از ظرف هایی که تو یا روی سینک موندن عکس بگیر.",
"با دست چپت شروع کن به فشار دادن انگشت کوچک راستت بکن. شدت این فشار را زیاد بکن و به خودت سخت بگیر سعی کن گریه کنیو به واقعی بودن فشار فکر کن. <br> *این خواسته در فضای بیرونی باید انجام شود.",
"زمانی که روبروی ویترین/پنجره‌ی گالری ایستادن دستاشون رو به هم بمالن و گرماش رو روی بخش‌هایی از بدنشون بذارن که دارای جراحت یا رددی از زخم باشه. نقطه‌ای از بدن که فشارهای عصبی در اونجا خودش رو به شکل درد نشون می‌ده. در صورت تمایل عکس این نقاط رو برام ارسال کنند.<br><img src=\"http://playcognition.live/images/picture5.png\">",
"یک کتاب را باز کن. تعدادی از کلماتش را انتخاب کن و با آن ها یک داستان کوتاه بنویس.",
"یک ساعت (یا بیشتر) وقت بذاری و به همنشینی اجسام اطرافت دقت کنی. از اجسامی که طوری کنار هم قرار گرفتن که باعث میشن شک کنی که از عمد کنار هم قرار داده شدن یا به صورت اتفاقی  ویدئوکلیپ‌های کوتاه بگیری. ",
"به جای آسمان، روی زمین را نگاه کنید و تا جایی که امکان دارد<br>به چاله های آب نزدیک شوید تا تمام انعکاس ممکن را داشته<br>\'تصاویر\' انعکاس یافته را با اتوفوکوس<br>باشید، سپس<br>گوشی ، عکاسی کنید. <br><img src=\"http://playcognition.live/images/picture4.png\">",
"چند تا از عادت های خود را روی کاغذ بنویسید <br>حرف نزنید. تایپ نکنید. حتی نگذارید تا حد امکان گوش های تان صدای کسی را بشنود <br>شما با افکار تان تنها خواهید بود<br>افکار تان را بنویسید و آنها را بررسی کنید <br>روز بعد درباره ی این تجربه با همه صحبت کنید  <br><img src=\"http://playcognition.live/images/Picture3.png\">",
"اگر امکانش را دارید سعی کنید برای ۲۴ ساعت صحبت نکنید <br>حرف نزنید. تایپ نکنید. حتی نگذارید تا حد امکان گوش های تان صدای کسی را بشنود <br> شما با افکار تان تنها خواهید بود <br>افکار تان را بنویسید و آنها را بررسی کنید <br>روز بعد درباره ی این تجربه با همه صحبت کنید  <br><img src=\"http://playcognition.live/images/Picture2.png\">",
"به یکی از عزيزان خود یادآوری کنید که آنها را دوست دارید <br><img src=\"http://playcognition.live/images/Picture1.png\">",
"با وسایل خونه ت یه سرپناه داخل اتاقت بساز. ازش برای سپری کردن تنهایی ت استفاده کن. تا موقعی نگهش دار که شب داخلش می خوابی."
]

function newQuote() {
	var randomNumber = Math.floor(Math.random() * (tasksEng.length));
	document.getElementById('quoteDisplay').style.border = "1px dashed black";
	document.getElementById('quoteDisplay').innerHTML = tasksEng[randomNumber];
}

function newQuoteFA() {
	var randomNumber = Math.floor(Math.random() * (tasksFa.length));
	document.getElementById('quoteDisplayFa').style.border = "1px dashed black";
	document.getElementById('quoteDisplayFa').innerHTML = tasksFa[randomNumber];
}

