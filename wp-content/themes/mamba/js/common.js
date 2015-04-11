/* FLEXSLIDER & FITVIDS */
jQuery(document).ready(function($) {
    $('.flexslider').flexslider();
    $('.post').fitVids();
    $('.page').fitVids();
});

/* RETURN TO TOP BUTTON */
jQuery(document).ready(function($) {

	$("#back-top").hide();
	
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});

/* MASONRY */
jQuery(document).ready(function($) {
    var container = document.querySelector('#masonry-loop');
    var msnry;
    imagesLoaded( container, function() {
        msnry = new Masonry( container, {
            itemSelector: '.masonry-entry'
        });
    });
});