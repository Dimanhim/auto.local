$(document).ready(function() {
//--- Слайдеры фото моделей
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

//---Ввод номера телефона
	$(".phone").inputmask({"mask": "+7 (999) 999-9999"});

//--- Подгрузка моделей автомобилей
	$('.cars').change(function() {
		var car = $(this).val();
		//alert(car);
		var url = '/frontend/web/addModel';
		$.get(url, {
			car: car,
		}, function(data) {
			data = JSON.parse(data);
			$('#formadd-model').html('');
			$('#formadd-model').append("<option value=''>Выбрать...</option>");
			for (var x in data){
			  var str = "<option value='" + x + "'>" + data[x] + "</option>";
				$('#formadd-model').append(str);
			}
		});
	});









});