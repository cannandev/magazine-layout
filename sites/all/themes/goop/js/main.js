(function($){

	var toggleSearch = function() {
		var searchToggle = $('.main-menu .last');
		searchToggle.html('<i class="fa fa-search"></i>').attr('id', 'search-toggle');
		searchToggle.click(function(){
			$('#search').toggleClass('active');
		});
	};

	var swapSocialLinks = function() {
		$('.social-links li a[href*="facebook"]').html('<i class="fa fa-facebook"></i>');
		$('.social-links li a[href*="twitter"]').html('<i class="fa fa-twitter"></i>');
		$('.social-links li a[href*="instagram"]').html('<i class="fa fa-instagram"></i>');
		$('.social-links li a[href*="tumblr"]').html('<i class="fa fa-tumblr"></i>');
	};
	
	$(document).ready(function(){
		toggleSearch();
		swapSocialLinks();
	});

})(jQuery);