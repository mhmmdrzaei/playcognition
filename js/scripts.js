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