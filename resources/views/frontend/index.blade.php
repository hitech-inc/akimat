@extends('frontend.layouts.master')

@section('content')
	
	@include('frontend.partials._slider')

	<div class="container-fluid" style="max-width: 1920px; padding-top: 50px;">
		<!-- <div class="container"> -->
			<div class="row">
				<!-- Start index page content -->
				<div class="col-lg-8">
					<!-- Start poster -->
					<div class="poster">
						<h3 class="white-t">Афиша  <a href="#" class="white-t">Все мероприятия</a></h3>
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<a href="#" class="date-wrapper" alt="">
									<div class="date">
										<span>18</span>
										<p>Августа</p>
									</div>
									<div class="date-content">
										<p class="white-t">Лица тюркских народов "Әл-фараби" познавательный вечер</p>
									</div>
								</a>
								<a href="#" class="date-wrapper" alt="">
									<div class="date">
										<span>18</span>
										<p>Августа</p>
									</div>
									<div class="date-content">
										<p class="white-t">Для учеников лагеря выставка ювелирных изделий "Қасиетті кеме қалған - Қазығұрт"</p>
									</div>
								</a>
							</div>
							<div class="col-lg-6 col-sm-6" style="padding-left: 0">
								<a href="#" class="date-wrapper" alt="">
									<div class="date">
										<span>19</span>
										<p>Августа</p>
									</div>
									<div class="date-content">
										<p class="white-t">Народный артист Казахской АКСР к 125 летию Жумата Шанина "Жарық жұлдыз - Жұмат Шанин" мероприятия</p>
									</div>
								</a>
								<a href="#" class="date-wrapper" alt="">
									<div class="date">
										<span>20</span>
										<p>Августа</p>
									</div>
									<div class="date-content">
										<p class="white-t">Ко дню 2017 год - год туризма Китая в Казахстанеорганизауия выставки о истории Китайской Народной Республики</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<!-- End poster -->
					<!-- Start news -->
					<div class="news-wrapper">
						<div class="row" style="margin-right: 0; margin-left: 0;">
							<div class="title-block">
								<h3 class="new-title">Новости  <a href="#" class="">Все новости</a></h3>	
							</div>
							<div class="col-lg-6" style="padding-right: 0; padding-left: 0">
								<a href="#" class="a-obshiy obl-link" alt=""><h4 class="t-center news-t-first">Областные</h4></a>
								<img src="{{ asset('assets/img/news/news-obl-main-bg.jpg') }}" alt="" style="max-width: 100%;" class="news-imgs">
								<div class="articles-blocks">
									<img src="{{ asset('assets/img/news/obl-article-1.jpg') }}" alt="">
									<div class="article-content">
										<a href="#" title="">
											<span class="white-t">21.06.2017</span>
											<p>В Туркистанской области определили лучший социальный проект...</p>
										</a>
									</div>
								</div>
								<div class="clear no-clear"></div>
								<div class="articles-blocks">
									<img src="{{ asset('assets/img/news/obl-article-2.jpg') }}" alt="">
									<div class="article-content">
										<a href="#" title="">
											<span class="white-t">21.06.2017</span>
											<p>Обувь выпускаемая в Шымкенте будут экспортировать в Россию...</p>
										</a>
									</div>
								</div>
								<div class="clear no-clear"></div>
								<div class="articles-blocks">
									<img src="{{ asset('assets/img/news/obl-article-1.jpg') }}" alt="">
									<div class="article-content">
										<a href="#" title="">
											<span class="white-t">21.06.2017</span>
											<p>В Туркистанской области определили лучший социальный проект...</p>
										</a>
									</div>
								</div>
								<div class="clear no-clear"></div>
								<div class="articles-blocks">
									<img src="{{ asset('assets/img/news/obl-article-2.jpg') }}" alt="">
									<div class="article-content">
										<a href="#" title="">
											<span class="white-t">21.06.2017</span>
											<p>Обувь выпускаемая в Шымкенте будут экспортировать в Россию...</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6" style="padding-right: 0; padding-left: 0">
								<a href="#" class="a-obshiy resp-link" alt=""><h4 class="t-center news-t-second">Республиканские</h4></a>
								<div class="article-resp-big">
									<span class="white-t">21.06.2017</span>
									<a href="#" title="Читать">
										<h4>В текущем году РИЦ "ӨҢТҮСТІК" профинансировал 16 кооперативов 21.08.2017</h4>
										<p>В текущем году РИЦ "ӨҢТҮСТІК" профинансировал 16 кооперативов 21.08.2017</p>
									</a>
								</div>
								<div class="resp-articles-blocks">
									<img src="{{ asset('assets/img/news/resp-article-1.jpg') }}" alt="">
									<div class="article-content">
										<a href="#" title="">
											<span class="white-t">21.06.2017</span>
											<p>В Туркестанской области начались начальные этапы работ по получению чистой воды из реки Угам...</p>
										</a>
									</div>
								</div>
								<div class="clear no-clear"></div>
								<div class="resp-articles-blocks">
									<img src="{{ asset('assets/img/news/resp-article-2.jpg') }}" alt="">
									<div class="article-content">
										<a href="#" title="">
											<span class="white-t">21.06.2017</span>
											<p>Стабилизационному фонду в Туркенстанской области удается сдерживать цены на продукты питания...</p>
										</a>
									</div>
								</div>
								<div class="clear no-clear"></div>
								<div class="resp-articles-blocks">
									<img src="{{ asset('assets/img/news/resp-article-1.jpg') }}" alt="">
									<div class="article-content">
										<a href="#" title="">
											<span class="white-t">21.06.2017</span>
											<p>В Туркестанской области начались начальные этапы работ по получению чистой воды из реки Угам...</p>
										</a>
									</div>
								</div>
								<div class="clear no-clear"></div>
								<div class="resp-articles-blocks">
									<img src="{{ asset('assets/img/news/resp-article-2.jpg') }}" alt="">
									<div class="article-content">
										<a href="#" title="">
											<span class="white-t">21.06.2017</span>
											<p>Стабилизационному фонду в Туркенстанской области удается сдерживать цены на продукты питания...</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End news -->

					<!-- Start situational monitor -->
					<div class="stm-wrapper" style="background: url(../assets/img/index/stm-monitor-bg.jpg) no-repeat; background-size: 100% 100%">
						<div class="stm-slider">
							<div class="stm-slides">
								<h4>Ситуационный монитор</h4>
								<div class="arrows">
									<a href="#" class="prev-bt"></a>
									<a href="#" class="next-bt"></a>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h5>21.08.2017</h5>
										<p>В связи с техническими работами на ТЭЦ в Шымкенте будет прекращена подача горячей воды с 01.09.2017</p>
									</div>
									<div class="col-lg-4">
										<h5>21.08.2017</h5>
										<p>Усиление ветра на Юге Казахстана с порывами до 30 м/с</p>
									</div>
									<div class="col-lg-4">
										<h5>21.08.2017</h5>
										<p>В ЮКО нет террористической угрозы</p>
									</div>
								</div>	
							</div>
							<!-- slide2 -->
							<div class="stm-slides">
								<h4>Ситуационный монитор 2</h4>
								<div class="arrows">
									<a href="#" class="prev-bt"></a>
									<a href="#" class="next-bt"></a>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<h5>21.08.2017</h5>
										<p>В связи с техническими работами на ТЭЦ в Шымкенте будет прекращена подача горячей воды с 01.09.2017</p>
									</div>
									<div class="col-lg-4">
										<h5>21.08.2017</h5>
										<p>Усиление ветра на Юге Казахстана с порывами до 30 м/с</p>
									</div>
									<div class="col-lg-4">
										<h5>21.08.2017</h5>
										<p>В ЮКО нет террористической угрозы</p>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<!-- End situational monitor -->

					<!-- Start mayor -->
					<div class="mayor-wrapper">
						<h5>Если бы я был акимом</h5>
						<p>Отправьте ваши идеи и предложения</p>
						<form action="">
							<button type="submit" class="mayor-btn">Написать</button>
						</form> 
					</div>
					<!-- End mayor -->

					<!-- Start sections -->
					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<a href="#" class="sections-link-wrap">
								<img src="{{ asset('assets/img/index/ruhani-jangiru.jpg') }}" alt="">
								<div class="flex-block">
									<h5>Модернизация общественного сознания</h5>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6">
							<a href="#" class="sections-link-wrap">
								<img src="{{ asset('assets/img/index/avtomatizirovannaya.jpg') }}" alt="">
								<div class="flex-block">
									<h5>Автоматизированная ИС МИО ЮКО</h5>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6">
							<a href="#" class="sections-link-wrap">
								<img src="{{ asset('assets/img/index/modernizatiya.jpg') }}" alt="">
								<div class="flex-block">
									<h5>"Третья модернизация Казахстана: Глобальная конкурентно-<br>способность"</h5>
								</div>
								
							</a>
						</div>
						<div class="col-lg-4 col-sm-6">
							<a href="#" class="sections-link-wrap">
								<img src="{{ asset('assets/img/index/assambleya.jpg') }}" alt="">
								<div class="flex-block">
									<h5>Ассамблея народа Казахстана</h5>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6">
							<a href="#" class="sections-link-wrap">
								<img src="{{ asset('assets/img/index/zakonodatelstvo.jpg') }}" alt="">
								<div class="flex-block">
									<h5>Законодательство</h5>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6">
							<a href="#" class="sections-link-wrap">
								<img src="{{ asset('assets/img/index/poslanie.jpg') }}" alt="">
								<div class="flex-block">
									<h5>Послания главы государства</h5>
								</div>
							</a>
						</div>
					</div>
					<!-- End sections -->
				</div>
				<!-- End index page content -->

				<!-- Start right side bar -->
				<div class="col-lg-4">
					<div class="results-wrapper">
						<h2>Результаты и достижения</h2>
						<img src="{{ asset('assets/img/right-sidebar/results-img.jpg') }}" alt="">
					</div>
					<div class="calendar-of-events" id="eventCalendar">
					</div>
					<div class="clear"></div>
					<div class="mayors-report">
						<a href="#">
							<h3>Отчет Акима области перед населением</h3>
						</a>
					</div>
					<div class="interview">
						<a href="#">
							<h3>Опрос</h3>
						</a>
					</div>
					<div class="clear"></div>
					<div class="five-bs">
						<a href="#">
							<img src="{{ asset('assets/img/right-sidebar/pasporta-zastroek-goroda.jpg') }}" alt="">
						</a>
						<a href="#">
							<img src="{{ asset('assets/img/right-sidebar/poisk-shkoli.jpg') }}" alt="">
						</a>
						<a href="#">
							<img src="{{ asset('assets/img/right-sidebar/aktivniy-grajdanin.jpg') }}" alt="">
						</a>
						<a href="#">
							<img src="{{ asset('assets/img/right-sidebar/ocenka-deyatelnosti.jpg') }}" alt="">
						</a>
						<a href="#">
							<img src="{{ asset('assets/img/right-sidebar/dlya-investorov.jpg') }}" alt="">
						</a>
					</div>
					<div class="prices-of-gsm">
						<h3>Цена на ГСМ</h3>
						<ul>
							<li class="gsm-li"><span class="ai-80">АИ - 80</span><span class="dotted-b"></span><a href="#">8.54</a></li>
							<li class="gsm-li"><span class="ai-60">АИ - 62</span><span class="dotted-b"></span><a href="#">132.93</a></li>
							<li class="gsm-li"><span class="ai-95-96">АИ - 95/96</span><span class="dotted-b"></span><a href="#">146.01</a></li>
							<li class="gsm-li"><span class="ai-98">АИ - 98</span><span class="dotted-b"></span><a href="#">153.85</a></li>
							<li class="gsm-li"><span class="marka">ДТз</span><span class="dotted-b"></span><a href="#">162.79</a></li>
							<li class="gsm-li"><span class="marka">ДТл</span><span class="dotted-b"></span><a href="#">132.76</a></li>
						</ul>
					</div>
					<div class="popular-services">
						<h3>Популярные услуги</h3>
						<ul>
							<li><a href="#">Адресная справка</a></li>
							<li><a href="#">Справка о пенсионных отчислениях</a></li>
							<li><a href="#">Оплата штрафов ПДД</a></li>
						</ul>
						<a href="" class="all-services">Все услуги</a>
					</div>
				</div>
				<!-- End right sidebar -->
			</div>
		<!-- </div> -->
		
		<!-- Start partners -->
		<div class="parts-wrapper">
			<div class="owl-carousel owl-theme">
				<div class="partners-inner">
					<img src="{{ asset('assets/img/partners/partner1.jpg') }}" alt="">
				</div>
				<div class="partners-inner">
					<img src="{{ asset('assets/img/partners/partner2.jpg') }}" alt="">
				</div>
				<div class="partners-inner">
					<img src="{{ asset('assets/img/partners/partner3.jpg') }}" alt="">
				</div>
				<div class="partners-inner">
					<img src="{{ asset('assets/img/partners/partner4.jpg') }}" alt="">
				</div>
				<div class="partners-inner">
					<img src="{{ asset('assets/img/partners/partner5.jpg') }}" alt="">
				</div>
				<div class="partners-inner">
					<img src="{{ asset('assets/img/partners/partner6.jpg') }}" alt="">
				</div>
			</div>			
		</div>
		<!-- End partners -->
	</div>
@endsection

@section('scripts')
	
@endsection