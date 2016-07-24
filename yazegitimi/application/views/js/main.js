$(document).ready(function(){

	/* Slicknav */
	$('nav.top-menu').slicknav({
		label: '',
		prependTo:'.menu-cont'
	});

	var currentHeight = $(window).height();
	var currentWidth = $(window).width();

	if( currentWidth < 992 ) {
		$(".filter_result").css("height", (currentHeight - 270) + "px" );
		$(".description").css("height", (currentHeight - 190) + "px" );
	} else {
		$(".filter_result").css("height", (currentHeight - 200) + "px" );
		$(".description").css("height", (currentHeight - 190) + "px" );
	}

	$(window).resize( function(){
		var currentHeight = $(window).height();
		var currentWidth = $(window).width();

		if( currentWidth < 992 ) {
			$(".filter_result").css("height", (currentHeight - 270) + "px" );
			$(".description").css("height", (currentHeight - 190) + "px" );
		} else {
			$(".filter_result").css("height", (currentHeight - 200) + "px" );
			$(".description").css("height", (currentHeight - 190) + "px" );
		}
	});

	/* Reload Script */
	function reload_js(src) {
		$('script[src="' + src + '"]').remove();
		$('<script>').attr('src', src).appendTo('footer');
	}

});