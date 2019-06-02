<?php
/*
Template Name: Home Template
*/
get_header(); ?>

<?php if( have_rows('sections_bilder') ): //$section_counter = 0; ?>

	<div class="wrapper">
		<div class="container container--fluid swiper-container">
			<div class="swiper-wrapper global-wrapper" data-anchor="first">
				
		    <?php while ( have_rows('sections_bilder') ) : the_row(); //$section_counter++;?>
	        <?php if( get_row_layout() == 'section_1' ): 
	        	$main_image_s1 = get_sub_field('main_image_s1');
	        	$job_text_s1 = get_sub_field('job_text_s1');
	        	$quote_text_s1 = get_sub_field('quote_text_s1');
	        	$autor_name_s1 = get_sub_field('autor_name_s1');
	        	$question_s1 = get_sub_field('question_s1');
	        	$red_button_s1 = get_sub_field('red_button_s1');
	        	$grey_button_s1 = get_sub_field('grey_button_s1'); ?>
	
				<section class="slide-section swiper-slide slide-priority">
					<?php //echo ( $section_counter == 1 ) ? 'slide-section__body--section' . $section_counter . '' : ''; ?>
					<div class="slide-section__body slide-section__body--section1">
					<?php if ( ! empty( $main_image_s1 ) ): ?>
					<?php //echo $section_counter; ?>
						<div class="front-interactive slide-section__interactive slide-section__interactive-1">
							<div class="layer-0 front-interactive__img front-interactive__img--background">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_1_9.png" alt="">
							</div>
							<?php //echo $section_counter; ?>
							<div class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-1">
								<img src="<?php echo $main_image_s1['sizes']['thumbnail_921x713']; ?>" alt="<?php echo $main_image_s1['alt']; ?>">
							</div>
							
							<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
							</div>
						</div>
					<?php endif; ?>
						<div class="front-content">
							<?php //echo $section_counter; ?>
							<div class="front-content__slogans front-content__slogans--section1"
							     data-swiper-animation="fadeInDown" data-duration=".2s">
								<?php if ( ! empty( $job_text_s1 ) ): ?>
									<div class="front-content__job">
										<p class="text text-medium"><?php echo $job_text_s1; ?></p>
									</div>
								<?php endif; ?>
								<?php if ( ! empty( $quote_text_s1 ) || ! empty( $autor_name_s1 ) ): ?>
									<div class="front-content__quote">
										<p class="front-content__text text text-small"><?php echo $quote_text_s1; ?></p>
										<p class="front-content__author text text-small"><?php echo $autor_name_s1; ?></p>
									</div>
								<?php endif; ?>
							</div>
							<?php if ( ! empty( $question_s1 ) ): ?>
							<?php //echo $section_counter; ?>
								<div class="front-content__titles front-content__titles--section1">
									<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
									    data-duration=".2s" data-delay=".4s"><?php echo $question_s1; ?></h2>
								</div>
							<?php endif; ?>
							<div class="front-content__actions front-content__actions--section1">
								<?php if ( ! empty( $red_button_s1 ) ): ?>
									<button class="def-button def-button__positive def-button__positive-toForm"
									        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay=".5s">
										<?php echo $red_button_s1; ?>
									</button>
								<?php endif; ?>
								<?php if ( ! empty( $grey_button_s1 ) ): ?>
									<button class="def-button def-button__negative" data-popup-btn="step-to-1"
									        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay=".7s">
										<?php echo $grey_button_s1; ?>
									</button>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<footer class="slide-section__footer"></footer>
				</section>
	
	        <?php elseif( get_row_layout() == 'section_2' ): 
	           	$main_image_s2 = get_sub_field('main_image_s2');
	        	$job_text_s2 = get_sub_field('job_text_s2');
	        	$question_first_s2 = get_sub_field('question_first_s2');
	        	$question_second_s2 = get_sub_field('question_second_s2');
	        	$red_button_s2 = get_sub_field('red_button_s2');
	        	$grey_button_s2 = get_sub_field('grey_button_s2'); ?>
	        
				<section class="slide-section swiper-slide slide-priority">
					<div class="slide-section__body">
					<?php if ( ! empty( $main_image_s2 ) ): ?>	
						<div class="front-interactive slide-section__interactive slide-section__interactive-2">
							<div class="layer-0 front-interactive__img front-interactive__img--background">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_2_11.png" alt="">
							</div>
							<div class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-2">
								<img src="<?php echo $main_image_s2['sizes']['thumbnail_544x713']; ?>" alt="<?php echo $main_image_s2['alt']; ?>">
							</div>
							<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
							</div>
						</div>
					<?php endif; ?>
						<div class="front-content front-content--section2">
							<?php if ( ! empty( $job_text_s2 ) ): ?>
								<div class="front-content__slogans front-content__slogans--section2"
								     data-swiper-animation="fadeInDown" data-duration=".2s">
									<div class="front-content__job">
										<p class="text text-medium"><?php echo $job_text_s2; ?></p>
									</div>
								</div>
							<?php endif; ?>
							<?php if ( ! empty( $question_first_s2 ) || ! empty( $question_second_s2 ) ): ?>
								<div class="front-content__titles front-content__titles--section2">
									<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
									    data-duration=".2s" data-delay=".4s"><?php echo $question_first_s2; ?></h2>
									<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
									    data-duration=".2s" data-delay=".6s"><?php echo $question_second_s2; ?></h2>
								</div>
							<?php endif; ?>
							<?php if( have_rows('questions_problems_s2') ) : ?>
								<div class="front-content__questions front-content__questions--section2">
									<ul class="front-content__list">
		    						<?php while ( have_rows('questions_problems_s2') ) : the_row(); 
		    							$problem_s1 = get_sub_field('problem_s1'); ?>
											<li class="front-content__item text text-default" data-swiper-animation="fadeInDown"
											    data-duration=".2s" data-delay=".8s"><?php echo $problem_s1; ?>
											</li>
		    						<?php endwhile; ?>
		    						</ul>
								</div>
							<?php endif; ?>
							<div class="front-content__actions front-content__actions--section2">
								<?php if ( ! empty( $red_button_s2 ) ): ?>
									<button class="def-button def-button__positive def-button__positive-toForm" id="test"
									        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay="1s">
										<?php echo $red_button_s2; ?>
									</button>
								<?php endif; ?>
								<?php if ( ! empty( $grey_button_s2 ) ): ?>
									<button class="def-button def-button__negative" data-popup-btn="step-to-2"
									        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay="1.2s">
										<?php echo $grey_button_s2; ?>
									</button>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<footer class="slide-section__footer"></footer>
				</section>
	        
	        <?php elseif( get_row_layout() == 'section_3' ): 
	        	$main_image_s3 = get_sub_field('main_image_s3');
	        	$job_text_s3 = get_sub_field('job_text_s3');
	        	$offer_first_s3 = get_sub_field('offer_first_s3');
	        	$offer_second_s3 = get_sub_field('offer_second_s3');
	        	$red_button_s3 = get_sub_field('red_button_s3');
	        	$grey_button_s3 = get_sub_field('grey_button_s3'); ?>
	        
				<section class="slide-section swiper-slide slide-priority">
					<div class="slide-section__body">
						<?php if ( ! empty( $main_image_s3 ) ): ?>
							<div class="front-interactive slide-section__interactive slide-section__interactive-3">
								<div class="layer-0 front-interactive__img front-interactive__img--background">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_2_11.png" alt="">
								</div>
								<div class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-3">
									<img src="<?php echo $main_image_s3['sizes']['thumbnail_485x713']; ?>" alt="<?php echo $main_image_s3['alt']; ?>">
								</div>
								<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
								</div>
							</div>
						<?php endif; ?>
						<div class="front-content">
							<?php if ( ! empty( $job_text_s3 ) ): ?>
								<div class="front-content__slogans front-content__slogans--section3"
								     data-swiper-animation="fadeInDown" data-duration=".2s">
									<div class="front-content__job">
										<p class="text text-medium"><?php echo $job_text_s3; ?></p>
									</div>
								</div>
							<?php endif; ?>
							<?php if ( ! empty( $offer_first_s3 ) || ! empty( $offer_second_s3 ) ): ?>
								<div class="front-content__titles front-content__titles--section3">
									<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
									    data-duration=".2s" data-delay=".4s"><?php echo $offer_first_s3; ?></h2>
									<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
									    data-duration=".2s" data-delay=".6s"><?php echo $offer_second_s3; ?></h2>
								</div>
							<?php endif; ?>
							<?php if( have_rows('about_reality_s3') ) : ?>
								<div class="front-content__facts">
		    						<?php while ( have_rows('about_reality_s3') ) : the_row(); 
		    							$reality_s3 = get_sub_field('reality_s3'); ?>
											<p class="front-content__text text text-default" data-swiper-animation="fadeInDown"
								   data-duration=".2s" data-delay=".8s"><?php echo $reality_s3; ?></p>
		    						<?php endwhile; ?>
								</div>
							<?php endif; ?>
							<div class="front-content__actions front-content__actions--section3">
								<?php if ( ! empty( $red_button_s3 ) ): ?>
									<button class="def-button def-button__positive def-button__positive-toForm"
									        data-swiper-animation="fadeInDown" data-duration=".5s" data-delay="1s">
										<?php echo $red_button_s3; ?>
									</button>
								<?php endif; ?>
								<?php if ( ! empty( $grey_button_s3 ) ): ?>
									<button class="def-button def-button__negative" data-popup-btn="step-to-3"
									        data-popup-btn="step-to-3" data-swiper-animation="fadeInDown" data-duration=".5s"
									        data-delay="1.2s">
										<?php echo $grey_button_s3; ?>
									</button>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<footer class="slide-section__footer"></footer>
				</section>
	        
			<?php elseif( get_row_layout() == 'section_4' ): 
				$main_image_s4 = get_sub_field('main_image_s4');
	        	$job_text_s4 = get_sub_field('job_text_s4');
	        	$privilege_s4 = get_sub_field('privilege_s4');
	        	$red_button_s4 = get_sub_field('red_button_s4');
	        	$grey_button_s4 = get_sub_field('grey_button_s4');?>
			
				<section class="slide-section swiper-slide slide-priority">
					<div class="slide-section__body">
						<?php if ( ! empty( $main_image_s3 ) ): ?>
							<div class="front-interactive slide-section__interactive slide-section__interactive-4">
								<div class="layer-0 front-interactive__img front-interactive__img--background">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_4_9.png" alt="">
								</div>
								<div class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-4">
									<img src="<?php echo $main_image_s4['sizes']['thumbnail_544x713']; ?>" alt="<?php echo $main_image_s4['alt']; ?>">
								</div>
								<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
								</div>
							</div>
						<?php endif; ?>
						<div class="front-content">
							<?php if ( ! empty( $job_text_s4 ) ): ?>
								<div class="front-content__slogans front-content__slogans--section4"
								     data-swiper-animation="fadeInDown" data-duration=".2s">
									<div class="front-content__job">
										<p class="text text-medium"><?php echo $job_text_s4; ?></p>
									</div>
								</div>
							<?php endif; ?>
							<?php if ( ! empty( $privilege_s4 ) ): ?>
								<div class="front-content__titles front-content__titles--section4">
									<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
									    data-duration=".2s" data-delay=".4s"><?php echo $privilege_s4; ?></h2>
								</div>
							<?php endif; ?>
							<div class="front-content__conditions">
								<?php if( have_rows('about_company_s4') ) : ?>
	    						<?php while ( have_rows('about_company_s4') ) : the_row(); 
	    							$company_name_s4 = get_sub_field('company_name_s4');
	    							$company_goods_s4 = get_sub_field('company_goods_s4'); ?>
										<p class="front-content__text text text-default" data-swiper-animation="fadeInDown"
										   data-duration=".2s" data-delay=".6s">
											<?php if ( ! empty( $company_name_s4 ) ): ?>
											<span class="front-content__text text-focus"><?php echo $company_name_s4; ?></span> -
											<?php endif; ?>
											<?php if ( ! empty( $company_goods_s4 ) ): ?>
											<?php echo $company_goods_s4; ?>
											<?php endif; ?>
										</p>
	    						<?php endwhile; ?>
								<?php endif; ?>
								<div class="front-content__actions front-content__actions--section4">
									<?php if ( ! empty( $red_button_s4 ) ): ?>
						          		<button class="def-button def-button__positive def-button__positive--next def-button__positive--calculate" data-swiper-animation="fadeInDown" data-duration=".5s" data-delay=".8s"><?php echo $red_button_s4; ?></button>
						          	<?php endif; ?>
						          	<?php if ( ! empty( $grey_button_s4 ) ): ?>	
						          		<button class="def-button def-button__negative def-button__negative--back" data-swiper-animation="fadeInDown" data-duration=".5s" data-delay="1s"><?php echo $grey_button_s4; ?></button>
						        	<?php endif; ?>
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
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_1_9.png" alt="">
							</div>
							<div
								class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-5">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_5.png" alt="">
							</div>
							<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
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
								    data-duration=".2s" data-delay=".4s" data-anchor="calculate">Калькулятор оплаты</h2>
							</div>
							<div class="calculate-block front-content__calculate" data-swiper-animation="fadeInDown"
							     data-duration=".2s" data-delay=".6s">
								<header class="calculate-block__header">
									<p class="calculate-block__result text-large">
										<span class="calculate-block__value"></span>
										<span class="calculate-block__currency">₴</span>
									</p>
									<p class="calculate-block__condition text-default text-default--up">заработотаешь за 1
										месяц если:</p>
								</header>
								<div class="calculate-block__body">
									<div class="calculate-block__col calculate-block__col--50">
										<h3 class="calculate-block__title text-default text-default--up">опыт работы</h3>
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
												<label class="calculate-block__label text-default" for="skill2-6month">2 - 6
													мес.</label>
											</p>
											<p class="calculate-block__action">
												<input type="radio" name="months" id="skillmore6month"
												       class="calculate-block__input" value="6 мес.">
												<label class="calculate-block__label text-default" for="skillmore6month">> 6
													мес.</label>
											</p>
										</div>
									</div>
									<div class="calculate-block__col calculate-block__col--50">
										<h3 class="calculate-block__title text-default text-default--up">английский</h3>
										<div class="calculate-block__actions">
											<p class="calculate-block__action">
												<input type="radio" name="eng" id="skillpooreng"
												       class="calculate-block__input" value="плохо">
												<label class="calculate-block__label text-default"
												       for="skillpooreng">плохо</label>
											</p>
											<p class="calculate-block__action">
												<input type="radio" name="eng" id="skillconfidenteng"
												       class="calculate-block__input" value="уверенно" checked>
												<label class="calculate-block__label text-default" for="skillconfidenteng">уверенно</label>
											</p>
											<p class="calculate-block__action">
												<input type="radio" name="eng" id="skillfluencyeng"
												       class="calculate-block__input" value="свободно">
												<label class="calculate-block__label text-default" for="skillfluencyeng">свободно</label>
											</p>
										</div>
									</div>
									<div class="calculate-block__col calculate-block__col--100">
										<h3 class="calculate-block__title text-default text-default--up">часы работы в
											неделю</h3>
										<div class="calculate-block__actions">
											<p class="calculate-block__action">
												<input type="radio" name="hours" id="hour30" class="calculate-block__input"
												       value="30">
												<label class="calculate-block__label text-default" for="hour30">30</label>
											</p>
											<p class="calculate-block__action">
												<input type="radio" name="hours" id="hour40" class="calculate-block__input"
												       value="40" checked>
												<label class="calculate-block__label text-default" for="hour40">40</label>
											</p>
											<p class="calculate-block__action">
												<input type="radio" name="hours" id="hour50" class="calculate-block__input"
												       value="50">
												<label class="calculate-block__label text-default" for="hour50">50</label>
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
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_6_4.png" alt="">
							</div>
							<div
								class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-6">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_6.png" alt="">
							</div>
							<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
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
									<li class="front-content__award"><img src="<?php echo get_template_directory_uri(); ?>/build/images/awards2019.png" alt="award-1"></li>
									<li class="front-content__award"><img src="<?php echo get_template_directory_uri(); ?>/build/images/ynot.png" alt="award-2"></li>
									<li class="front-content__award"><img src="<?php echo get_template_directory_uri(); ?>/build/images/nominee2019.png" alt="award-3"></li>
									<li class="front-content__award"><img src="<?php echo get_template_directory_uri(); ?>/build/images/nominee2019-modest.png" alt="award-4">
									</li>
								</ul>
								<p class="front-content__text text text-default" data-swiper-animation="fadeInDown"
								   data-duration=".2s" data-delay=".6s">
									За годы работы мы были не раз номинированы на разных церемониях наград нашего бизнесса.
									AW Awards , YNOT Awards, LAL Expo и Bucharest Summit Awards.
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
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_7_7.png" alt="">
							</div>
							<div
								class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-7">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_7.png" alt="">
							</div>
							<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
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
												Пр��ятный коллекив, адекватное руководство, на время сессии предоставляют
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
								        data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".8s">заполнить
									анкету
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
	        
				<section class="slide-section swiper-slide slide-priority">
					<div class="slide-section__body">
						<div class="front-interactive slide-section__interactive slide-section__interactive-8">
							<div class="layer-0 front-interactive__img front-interactive__img--background">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_8_1.png" alt="">
							</div>
							<div
								class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-8">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/models/section_8.png" alt="">
							</div>
							<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
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
								    data-duration=".2s" data-delay=".4s" data-anchor="last">анкета</h2>
							</div>
							<div class="form-block front-content__form">
								<h3 class="form-block__title text text-default text-default--up"
								    data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".6s">заполни, что бы
									стать моделью:</h3>
								<form action="" data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".7s">
									<input class="form-block__input text text-default" type="text" placeholder="ФИО">
									<input class="form-block__input text text-default" type="number" placeholder="Возраст">
									<input class="form-block__input text text-default" type="number" placeholder="Телефон">
									<div class="form-block__file">
										<input class="form-block__input" type="file" id="form-file">
										<label class="form-block__label" for="form-file">+</label>
									</div>
									<div class="form-block__actions front-content__actions--section8">
										<button class="def-button def-button__positive" data-swiper-animation="fadeInDown"
										        data-duration=".2s" data-delay=".8s">отправить анкету
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
	

<?php get_footer(); ?>