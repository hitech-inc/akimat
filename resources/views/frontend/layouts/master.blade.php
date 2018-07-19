<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Акимат Байдибекского района</title>

	<link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

</head>
<body>
	<div class="container-fluid" style="padding-right: 0; padding-left: 0; max-width: 1920px; display: flex;">
		<div class="sidebar_wrapper">
			@include('frontend.partials._left_sidebar')
		</div>
		
		<div class="content_wrapper">
			@include('frontend.partials._header')
		
			@yield('content')

			@include('frontend.partials._footer')
		</div>
	</div>

	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
	<!-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/scripts.js') }}"></script>

	<!-- Event calendar -->
	<script src="{{ asset('assets/js/moment.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.eventCalendar.js') }}"></script>
	<!-- fontawesome -->
	<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
	<!-- slick -->
	<script src="{{ asset('assets/js/slick.min.js') }}"></script>
	<!-- fullpage -->
	<script src="{{ asset('assets/js/jquery.fullpage.min.js') }}"></script>

	<script>
		$(document).ready(function () {

			@yield('scripts');

			// init owl-carousel
			$('.owl-carousel').owlCarousel({
				items:5,
			    loop:true,
			    margin:10,
			    autoplay:true,
			    autoplayTimeout:2000,
			    responsiveClass:true,
			    nav:true
			});

			// Slick init
			$('.single-item').slick({
				// Показывать или отключить стрелки
				arrows: false,
				autoplay: true,
				infinite: true,
				// Когда двигаем слайд мышкой то паузы autoplay не будет
				pauseOnFocus: false
			});

			$('.stm-slider').slick({
				// Показывать или отключить стрелки
				arrows: true,
				infinite: true,
				// Когда двигаем слайд мышкой то паузы autoplay не будет
				pauseOnFocus: false
			});

			// fullpage init
			// var size = $(window).width();
			// if (size > '991'){
			// 	$('#fullpage').fullpage({
	           
	              
   //          	});
			// };

			// Event calendar init
			$(function(){
				var data = [
				{ "date": "2018-09-21 10:15:20", "title": "Событие 1", "description": "Анонс мероприятия", "url": "http://parkresidence.kz/" },
				// { "date": "2018-09-21 10:15:20", "title": "Событие 2", "description": "Анонс меоприятия", "url": "http://parkresidence.kz/" },
				];
				$('#eventCalendar').eventCalendar({
					jsonData: data,
					eventsjson: 'data.json',
					jsonDateFormat: 'human',
					startWeekOnMonday: false,
					openEventInNewWindow: true,
					dateFormat: 'DD-MM-YYYY',
					showDescription: false,
					locales: {
						locale: "ru",
						txt_noEvents: "Нет запланированных событий",
						txt_SpecificEvents_prev: "",
						txt_SpecificEvents_after: "события:",
						txt_NextEvents: "Следующие события:",
						txt_GoToEventUrl: "Смотреть",
						moment: {
							"months" : [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
							"Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
							"monthsShort" : [ "Янв", "Фев", "Мар", "Апр", "Май", "Июн",
							"Июл", "Авг", "Сен", "Окт", "Ноя", "Дек" ],
							"weekdays" : [ "Воскресенье", "Понедельник","Вторник","Среда","Четверг",
							"Пятница","Суббота" ],
							"weekdaysShort" : [ "Вс","Пн","Вт","Ср","Чт",
							"Пт","Сб" ],
							"weekdaysMin" : [ "Вс","Пн","Вт","Ср","Чт",
							"Пт","Сб" ]
						}
					}
				});
			});
			// End event calendar

		});
	</script>
</body>
</html>