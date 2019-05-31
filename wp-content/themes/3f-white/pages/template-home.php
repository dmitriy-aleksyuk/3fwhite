<?php
/*
Template Name: Home Template
*/
get_header(); ?>
<?php //while ( have_posts() ) : the_post(); ?>

	<?php if( have_rows('sections_biilder') ): ?>
	
		<div class="wrapper">
			<div class="container container--fluid swiper-container">
				<div class="swiper-wrapper">
	
			    <?php while ( have_rows('sections_biilder') ) : the_row(); ?>
			        <?php if( get_row_layout() == 'section_1' ): ?>
			
						<section class="slide-section swiper-slide slide-priority">
								<div class="slide-section__body slide-section__body--section1">
									<div class="front-interactive slide-section__interactive slide-section__interactive-1">
										<div class="layer-0 front-interactive__img front-interactive__img--background">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_1_9.png"
											     alt="">
										</div>
										<div
											class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-1">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_1.png"
											     alt="">
										</div>
										<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
											<img
												src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png"
												alt="">
										</div>
									</div>
									<div class="front-content">
										<div class="front-content__slogans front-content__slogans--section1"
										     data-swiper-animation="fadeInDown" data-duration=".2s">
											<div class="front-content__job">
												<p class="text text-medium">Работа <br> вэб моделью в харькове</p>
											</div>
											<div class="front-content__quote">
												<p class="front-content__text text text-small">«Когда хочешь писать о женщине,
													обмакни перо в радугу
													и стряхни пыль с крыльев бабочки»</p>
												<p class="front-content__author text text-small">Дени Дидро</p>
											</div>
										</div>
										<div class="front-content__titles front-content__titles--section1">
											<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
											    data-duration=".2s" data-delay=".4s">Хотите зарабатывать достойно?</h2>
										</div>
										<div class="front-content__actions front-content__actions--section1">
											<button class="def-button def-button__positive def-button__positive-toForm"
											        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay=".5s"
											        id="test">хочу зарабатывать
											</button>
											<button class="def-button def-button__negative" data-popup-btn="step-to-1"
											        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay=".7s">уже
												зарабатываю
											</button>
										</div>
									</div>
								</div>
								<footer class="slide-section__footer"></footer>
							</section>
			
			        <?php elseif( get_row_layout() == 'section_2' ): ?>
			        
			        	<section class="slide-section swiper-slide slide-priority">
								<div class="slide-section__body">
									<div class="front-interactive slide-section__interactive slide-section__interactive-2">
										<div class="layer-0 front-interactive__img front-interactive__img--background">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_2_11.png"
											     alt="">
										</div>
										<div
											class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-2">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_2.png"
											     alt="">
										</div>
										<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
											<img
												src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png"
												alt="">
										</div>
									</div>
									<div class="front-content front-content--section2">
										<div class="front-content__slogans front-content__slogans--section2"
										     data-swiper-animation="fadeInDown" data-duration=".2s">
											<div class="front-content__job">
												<p class="text text-medium">Работа <br> вэб моделью в харькове</p>
											</div>
										</div>
										<div class="front-content__titles front-content__titles--section2">
											<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
											    data-duration=".2s" data-delay=".4s">Мало платят?</h2>
											<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
											    data-duration=".2s" data-delay=".6s">Все плохо?</h2>
										</div>
										<div class="front-content__questions front-content__questions--section2">
											<ul class="front-content__list">
												<li class="front-content__item text text-default" data-swiper-animation="fadeInDown"
												    data-duration=".2s" data-delay=".8s">Ищешь себя?
												</li>
												<li class="front-content__item text text-default" data-swiper-animation="fadeInDown"
												    data-duration=".2s" data-delay=".8s">Не можешь реализоваться?
												</li>
												<li class="front-content__item text text-default" data-swiper-animation="fadeInDown"
												    data-duration=".2s" data-delay=".8s">Без опыта не берут на работу?
												</li>
											</ul>
										</div>
										<div class="front-content__actions front-content__actions--section2">
											<button class="def-button def-button__positive def-button__positive-toForm"
											        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay="1s">хочу все
												изменить
											</button>
											<button class="def-button def-button__negative" data-popup-btn="cat2"
											        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay="1.2s">все
												устраивает
											</button>
										</div>
									</div>
								</div>
								<footer class="slide-section__footer"></footer>
							</section>
			        
			        <?php elseif( get_row_layout() == 'section_3' ): ?>
			        
			        	<section class="slide-section swiper-slide slide-priority">
								<div class="slide-section__body">
									<div class="front-interactive slide-section__interactive slide-section__interactive-3">
										<div class="layer-0 front-interactive__img front-interactive__img--background">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_2_11.png"
											     alt="">
										</div>
										<div
											class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-3">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_3.png"
											     alt="">
										</div>
										<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
											<img
												src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png"
												alt="">
										</div>
									</div>
									<div class="front-content">
										<div class="front-content__slogans front-content__slogans--section3"
										     data-swiper-animation="fadeInDown" data-duration=".2s">
											<div class="front-content__job">
												<p class="text text-medium">Работа <br> вэб моделью в харькове</p>
											</div>
										</div>
										<div class="front-content__titles front-content__titles--section3">
											<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
											    data-duration=".2s" data-delay=".4s">предлагаем</h2>
											<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
											    data-duration=".2s" data-delay=".6s">работу в студии</h2>
										</div>
										<div class="front-content__facts">
											<p class="front-content__text text text-default" data-swiper-animation="fadeInDown"
											   data-duration=".2s" data-delay=".8s">Каковы сегодняшние реалии для молодой девушки?
												Душный офис, нудный босс, не самый вкусный кофе и зарплата в 3000 гривен… </p>
											<p class="front-content__text text text-default text-focus"
											   data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".8s">3Fmodels
												отказывается верить, что это Ваш предел!</p>
										</div>
										<div class="front-content__actions front-content__actions--section3">
											<button class="def-button def-button__positive def-button__positive-toForm"
											        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay="1s">хочу в
												студию
											</button>
											<button class="def-button def-button__negative" data-swiper-animation="fadeInDown"
											        data-duration=".5s" data-delay="1.2s">ищу другое
											</button>
										</div>
									</div>
								</div>
								<footer class="slide-section__footer"></footer>
							</section>
			
					<?php elseif( get_row_layout() == 'section_4' ): ?>
					
						<section class="slide-section swiper-slide slide-priority">
								<div class="slide-section__body">
									<div class="front-interactive slide-section__interactive slide-section__interactive-4">
										<div class="layer-0 front-interactive__img front-interactive__img--background">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_4_9.png"
											     alt="">
										</div>
										<div
											class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-4">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_4.png"
											     alt="">
										</div>
										<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
											<img
												src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png"
												alt="">
										</div>
									</div>
									<div class="front-content">
										<div class="front-content__slogans front-content__slogans--section4"
										     data-swiper-animation="fadeInDown" data-duration=".2s">
											<div class="front-content__job">
												<p class="text text-medium">Работа <br> вэб моделью в харькове</p>
											</div>
										</div>
										<div class="front-content__titles front-content__titles--section4">
											<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
											    data-duration=".2s" data-delay=".4s">Преимущество работы</h2>
										</div>
										<div class="front-content__conditions">
											<p class="front-content__text text text-default" data-swiper-animation="fadeInDown"
											   data-duration=".2s" data-delay=".6s">
												<span class="front-content__text text-focus">3Fmodels</span> -
												это Сообщество успешных девушек, проживающих в замечательном городе Харькове и
												нашедших себя в популярной сегодня сфере вебкам индустрии.
											</p>
											<p class="front-content__text text text-default" data-swiper-animation="fadeInDown"
											   data-duration=".2s" data-delay=".6s">
												<span class="front-content__text text-focus">3Fmodels</span> -
												это круг единомышленников, высокое финансовое положение которых не зависит от
												нестабильных внешних факторов и желания третьих лиц.
											</p>
											<p class="front-content__text text text-default" data-swiper-animation="fadeInDown"
											   data-duration=".2s" data-delay=".6s">
												<span class="front-content__text text-focus">3Fmodels</span> -
												это мир ярких впечатлений и возможностей, мир преображения и новых достижений, мир
												независимости и подлинной свободы самовыражения.
											</p>
											<div class="front-content__actions front-content__actions--section4">
												<button class="def-button def-button__positive def-button__positive--next"
												        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay=".8s">
													рассчитать оплату
												</button>
												<button class="def-button def-button__negative def-button__negative--back"
												        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay="1s">назад
												</button>
											</div>
										</div>
									</div>
								</div>
								<footer class="slide-section__footer"></footer>
							</section>
			
					<?php elseif( get_row_layout() == 'section_5' ): ?>
					
						<section class="slide-section swiper-slide slide-priority">
								<div class="slide-section__body">
									<div class="front-interactive slide-section__interactive slide-section__interactive-5">
										<div class="layer-0 front-interactive__img front-interactive__img--background">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_1_9.png"
											     alt="">
										</div>
										<div
											class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-5">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_5.png"
											     alt="">
										</div>
										<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
											<img
												src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png"
												alt="">
										</div>
									</div>
									<div class="front-content">
										<div class="front-content__slogans front-content__slogans--section5"
										     data-swiper-animation="fadeInDown" data-duration=".2s">
											<div class="front-content__job">
												<p class="text-medium">Работа <br> вэб моделью в харькове</p>
											</div>
										</div>
										<div class="front-content__titles front-content__titles--section5">
											<h2 class="front-content__title text-large" data-swiper-animation="fadeInDown"
											    data-duration=".2s" data-delay=".4s">Калькулятор оплаты</h2>
										</div>
										<div class="calculate-block front-content__calculate" data-swiper-animation="fadeInDown"
										     data-duration=".2s" data-delay=".6s">
											<header class="calculate-block__header">
												<p class="calculate-block__result text-large">
													<span class="calculate-block__value"></span>
													<span class="calculate-block__currency">₴</span>
												</p>
												<p class="calculate-block__condition text-default text-default--up">заработотаешь за
													1 месяц если:</p>
											</header>
											<div class="calculate-block__body">
												<div class="calculate-block__col calculate-block__col--50">
													<h3 class="calculate-block__title text-default text-default--up">опыт
														работы</h3>
													<div class="calculate-block__actions">
														<p class="calculate-block__action">
															<input type="radio" name="months" id="skill0month"
															       class="calculate-block__input" value="0 мес.">
															<label class="calculate-block__label text-default" for="skill0month">0
																мес.</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="months" id="skill2-6month"
															       class="calculate-block__input" value="1 мес." checked>
															<label class="calculate-block__label text-default" for="skill2-6month">2
																- 6 мес.</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="months" id="skillmore6month"
															       class="calculate-block__input" value="6 мес.">
															<label class="calculate-block__label text-default"
															       for="skillmore6month">> 6 мес.</label>
														</p>
													</div>
												</div>
												<div class="calculate-block__col calculate-block__col--50">
													<h3 class="calculate-block__title text-default text-default--up">английский</h3>
													<div class="calculate-block__actions">
														<p class="calculate-block__action">
															<input type="radio" name="eng" id="skillpooreng"
															       class="calculate-block__input" value="плохо">
															<label class="calculate-block__label text-default" for="skillpooreng">плохо</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="eng" id="skillconfidenteng"
															       class="calculate-block__input" value="уверенно" checked>
															<label class="calculate-block__label text-default"
															       for="skillconfidenteng">уверенно</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="eng" id="skillfluencyeng"
															       class="calculate-block__input" value="свободно">
															<label class="calculate-block__label text-default"
															       for="skillfluencyeng">свободно</label>
														</p>
													</div>
												</div>
												<div class="calculate-block__col calculate-block__col--100">
													<h3 class="calculate-block__title text-default text-default--up">часы работы в
														неделю</h3>
													<div class="calculate-block__actions">
														<p class="calculate-block__action">
															<input type="radio" name="hours" id="hour30"
															       class="calculate-block__input" value="30">
															<label class="calculate-block__label text-default"
															       for="hour30">30</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="hours" id="hour40"
															       class="calculate-block__input" value="40" checked>
															<label class="calculate-block__label text-default"
															       for="hour40">40</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="hours" id="hour50"
															       class="calculate-block__input" value="50">
															<label class="calculate-block__label text-default"
															       for="hour50">50</label>
														</p>
													</div>
												</div>
											</div>
											<div class="calculate-block__buttons" style="display: none">
												<button class="def-button def-button__positive">рассчитать оплату</button>
												<button class="def-button def-button__negative">назад</button>
											</div>
										</div>
									</div>
								</div>
								<footer class="slide-section__footer"></footer>
							</section>
			        
			        <?php elseif( get_row_layout() == 'section_6' ): ?>
			        
			        	<section class="slide-section swiper-slide slide-priority">
								<div class="slide-section__body">
									<div class="front-interactive slide-section__interactive slide-section__interactive-6">
										<div class="layer-0 front-interactive__img front-interactive__img--background">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_6_4.png"
											     alt="">
										</div>
										<div
											class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-6">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_6.png"
											     alt="">
										</div>
										<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
											<img
												src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png"
												alt="">
										</div>
									</div>
									<div class="front-content">
										<div class="front-content__slogans front-content__slogans--section6"
										     data-swiper-animation="fadeInDown" data-duration=".2s">
											<div class="front-content__job">
												<p class="text text-medium">Работа <br> вэб моделью в харькове</p>
											</div>
										</div>
										<div class="front-content__titles front-content__titles--section6">
											<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
											    data-duration=".2s" data-delay=".4s">Факты о студии</h2>
										</div>
										<div class="front-content__progress">
											<p class="front-content__text text text-default" data-swiper-animation="fadeInDown"
											   data-duration=".2s" data-delay=".5s">
												Работаем не только со странами СНГ, но и за рубежом! Основная масса наших клиентов
												находится заграницей.
											</p>
											<ul class="front-content__awards" data-swiper-animation="fadeInDown" data-duration=".2s"
											    data-delay=".6s">
												<li class="front-content__award"><img
														src="<?php echo get_template_directory_uri(); ?>/build/images/awards2019.png"
														alt="award-1"></li>
												<li class="front-content__award"><img
														src="<?php echo get_template_directory_uri(); ?>/build/images/ynot.png"
														alt="award-2"></li>
												<li class="front-content__award"><img
														src="<?php echo get_template_directory_uri(); ?>/build/images/nominee2019.png"
														alt="award-3"></li>
												<li class="front-content__award"><img
														src="<?php echo get_template_directory_uri(); ?>/build/images/nominee2019-modest.png"
														alt="award-4"></li>
											</ul>
											<p class="front-content__text text text-default" data-swiper-animation="fadeInDown"
											   data-duration=".2s" data-delay=".6s">
												За годы работы мы были не раз номинированы на разных церемониях наград нашего
												бизнесса. AW Awards , YNOT Awards, LAL Expo и Bucharest Summit Awards.
											</p>
										</div>
										<div class="front-content__actions front-content__actions--section6">
											<button class="def-button def-button__positive def-button__positive-toForm"
											        data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".8s">хочу в
												студию
											</button>
											<button class="def-button def-button__negative def-button__negative--back"
											        data-swiper-animation="fadeInDown" data-duration=".2s" data-delay="1s">назад
											</button>
										</div>
									</div>
								</div>
								<footer class="slide-section__footer"></footer>
							</section>
			        
			        <?php elseif( get_row_layout() == 'section_7' ): ?>
			        
			        	<section class="slide-section swiper-slide slide-priority">
								<div class="slide-section__body">
									<div class="front-interactive slide-section__interactive slide-section__interactive-7">
										<div class="layer-0 front-interactive__img front-interactive__img--background">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_7_7.png"
											     alt="">
										</div>
										<div
											class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-7">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_7.png"
											     alt="">
										</div>
										<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
											<img
												src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png"
												alt="">
										</div>
									</div>
									<div class="front-content">
										<div class="front-content__slogans front-content__slogans--section7"
										     data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".4s">
											<div class="front-content__job">
												<p class="text text-medium">Работа <br> вэб моделью в харькове</p>
											</div>
										</div>
										<div class="front-content__titles front-content__titles--section7">
											<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
											    data-duration=".2s" data-delay=".6s">Отзывы</h2>
										</div>
										<div class="front-content__feedbacks feedback-slider" data-swiper-animation="fadeInDown"
										     data-duration=".2s" data-delay=".8s">
											<div class="front-content__slider feedback-slider__wrapper">
												<div class=" feedback-slider__container swiper-wrapper">
													<div class="feedback-slider__slide swiper-slide">
														<p class="front-content__text text-default">
															Приятный коллекив, адекватное руководство, на время сессии предоставляют
															отпуск — что еще нужно сдуденту.
														</p>
														<p class="front-content__user text-default">Карина З., 19 лет</p>
													</div>
													<div class="feedback-slider__slide swiper-slide">
														<p class="front-content__text text-default">
															Приятный коллекив, адекватное руководство, на время сессии предоставляют
															отпуск — что еще нужно сдуденту.
														</p>
														<p class="front-content__user text-default">Карина З., 19 лет</p>
													</div>
													<div class="feedback-slider__slide swiper-slide">
														<p class="front-content__text text-default">
															Приятный коллекив, адекватное руководство, на время сессии предоставляют
															отпуск — что еще нужно сдуденту.
														</p>
														<p class="front-content__user text-default">Карина З., 19 лет</p>
													</div>
												</div>
											</div>
											<button class="feedback-slider__next">
					  <span>
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/r_arrow.png" alt="right_arrow">
					  </span>
											</button>
											<button class="feedback-slider__prev">
					  <span>
						<img src="<?php echo get_template_directory_uri(); ?>/build/images/l_arrow.png" alt="right_arrow">
					  </span>
											</button>
										</div>
										<div class="front-content__actions front-content__actions--section7">
											<button class="def-button def-button__positive def-button__positive-toForm"
											        data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".8s">
												заполнить анкету
											</button>
											<button class="def-button def-button__negative def-button__negative--back"
											        data-swiper-animation="fadeInDown" data-duration=".2s" data-delay="1s">назад
											</button>
										</div>
									</div>
								</div>
								<footer class="slide-section__footer"></footer>
							</section>
			        
			        <?php elseif( get_row_layout() == 'section_8' ): ?>
			        
			        	<section class="slide-section swiper-slide slide-priority" data-anchor="last">
								<div class="slide-section__body">
									<div class="front-interactive slide-section__interactive slide-section__interactive-8">
										<div class="layer-0 front-interactive__img front-interactive__img--background">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_8_1.png"
											     alt="">
										</div>
										<div
											class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-8">
											<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_8.png"
											     alt="">
										</div>
										<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
											<img
												src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png"
												alt="">
										</div>
									</div>
									<div class="front-content">
										<div class="front-content__slogans front-content__slogans--section8"
										     data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".4s">
											<div class="front-content__job">
												<p class="text text-medium">Работа <br> вэб моделью в харькове</p>
											</div>
										</div>
										<div class="front-content__titles front-content__titles--section8">
											<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
											    data-duration=".2s" data-delay=".4s">анкета</h2>
										</div>
										<div class="form-block front-content__form">
											<h3 class="form-block__title text text-default text-default--up"
											    data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".6s">заполни, что
												бы стать моделью:</h3>
											<form action="" data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".7s">
												<input class="form-block__input text text-default" type="text" placeholder="ФИО">
												<input class="form-block__input text text-default" type="number"
												       placeholder="Возраст">
												<input class="form-block__input text text-default" type="number"
												       placeholder="Телефон">
												<div class="form-block__file">
													<input class="form-block__input" type="file" id="form-file">
													<label class="form-block__label" for="form-file">+</label>
												</div>
												<div class="form-block__actions front-content__actions--section8">
													<button class="def-button def-button__positive"
													        data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".8s">
														отправить анкету
													</button>
													<button class="def-button def-button__negative def-button__negative--back"
													        data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".9s">
														назад
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<footer class="slide-section__footer"></footer>
							</section>
			        
			        <?php endif; ?>
			    <?php endwhile; ?>
	   
	   			 </div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
		
	<?php endif; ?>

	<div class="popup-overlay">
		<!-- container for content -->
		<div class="popup-window" data-popup-content="step-to-1">
			<div class="popup-window__imgs">
				<div class="popup-window__img popup-window__img--4"><img
						src="<?php echo get_template_directory_uri(); ?>/build/images/popup/full_1.png" alt="image1">
				</div>
			</div>
			<div class="popup-overlay__wrap">
				<!-- button of close -->
				<spam class="popup-overlay__divider">или</spam>
				<button class="popup-overlay__close">
					<span>Esc</span>
				</button>
				<div class="popup-window__content">
					<div class="popup-window__container">
						<h3 class="popup-window__title">Время идет</h3>
						<p class="popup-window__text">Сегодня вас это устаивает, но что будет через 5, 10, 15 лет?</p>
						<p class="popup-window__text">Мы считаем, что не стоит думать о перспективе, если ее можно уже
							взять сегодня.</p>
					</div>
					<div class="popup-window__action">
						<button class="popup-window__try popup-window__try-2">попробуй</button>
					</div>
				</div>
			</div>
		</div>
		<div class="popup-window" data-popup-content="cat2">
			<div class="popup-window__imgs">
				<div class="popup-window__img popup-window__img--4"><img
						src="<?php echo get_template_directory_uri(); ?>/build/images/popup/full_2.png" alt="image1">
				</div>
			</div>
			<div class="popup-overlay__wrap">
				<!-- button of close -->
				<spam class="popup-overlay__divider">или</spam>
				<button class="popup-overlay__close">
					<span>Esc</span>
				</button>
				<div class="popup-window__content">
					<div class="popup-window__container">
						<h3 class="popup-window__title">Вы свободны в своем выборе</h3>
						<p class="popup-window__text">Но когда есть выбор между "хорошее" и "лучшее" - очевидно, какой
							выбор правильный. У нас лучшие условия для новичков: высокие отчисления, ежедневные выплаты
							с первого дня работы, лучшие трененры и хорошая атмосфера. Приоткрой для себя завесу тайны -
							просто попробуй, и уже спустя несколько дней ты поймешь, что сделала правильный выбор.
							Заполни заявку - мы ждем именно тебя))</p>
					</div>
					<div class="popup-window__action">
						<button class="popup-window__try popup-window__try-3">попробуй</button>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php //endwhile; ?>
<?php get_footer(); ?>