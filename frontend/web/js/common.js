$(document).ready(function() {
	$('a.delete').on('click', function() {
         $('.message p').fadeIn();
         return false;
      });
	$('.slider-for').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '.slider-for',
	  dots: true,
	  centerMode: true,
	  focusOnSelect: true
	});
	$(".phone").inputmask({"mask": "+7 (999) 999-9999"});
});