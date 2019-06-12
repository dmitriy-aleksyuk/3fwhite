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
					<?php /*
					<div class="slide-section__body<?php //echo ( $section_counter == 1 ) ? ' slide-section__body--section' . $section_counter . '' : ''; ?>">
					*/?>
					<div class="slide-section__body slide-section__body--section1">
					<?php if ( ! empty( $main_image_s1 ) ): ?>
						<div class="front-interactive slide-section__interactive slide-section__interactive-1<?php //echo $section_counter; //1 ?>">
							<div class="layer-0 front-interactive__img front-interactive__img--background">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_1_9.png" alt="">
							</div>
							<div class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-1">
								<img src="<?php echo $main_image_s1['sizes']['thumbnail_921x713']; ?>" alt="<?php echo $main_image_s1['alt']; ?>">
							</div>
							
							<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
							</div>
						</div>
					<?php endif; ?>
						<div class="front-content">
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
								<div class="front-content__titles front-content__titles--section1">
									<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
									    data-duration=".2s" data-delay=".4s"><?php echo $question_s1; ?></h2>
								</div>
							<?php endif; ?>
							<?php if ( ! empty( $red_button_s1 ) || ! empty( $grey_button_s1 ) ): ?>
								<div class="front-content__actions front-content__actions--section1">
									<?php if ( ! empty( $red_button_s1 ) ): ?>
										<button class="def-button def-button__positive def-button__positive--to3 def-button__jsform"
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
							<?php endif; ?>
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
						<div class="front-interactive slide-section__interactive slide-section__interactive-2<?php //echo $section_counter; //2 ?>">
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
							<?php if ( ! empty( $red_button_s2 ) || ! empty( $grey_button_s2 ) ): ?>
								<div class="front-content__actions front-content__actions--section2">
									<?php if ( ! empty( $red_button_s2 ) ): ?>
										<button class="def-button def-button__positive def-button__positive--to3 popup-window__toForm"
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
							<?php endif; ?>
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
							<div class="front-interactive slide-section__interactive slide-section__interactive-3<?php //echo $section_counter; //3 ?>">
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
							<?php if ( ! empty( $red_button_s3 ) || ! empty( $grey_button_s3 ) ): ?>
								<div class="front-content__actions front-content__actions--section3">
									<?php if ( ! empty( $red_button_s3 ) ): ?>
										<button class="def-button def-button__positive def-button__positive--to4 popup-window__toForm"
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
							<?php endif; ?>
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
							<div class="front-interactive slide-section__interactive slide-section__interactive-4<?php //echo $section_counter; //4 ?>">
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
								<?php if ( ! empty( $red_button_s4 ) || ! empty( $grey_button_s4 ) ): ?>
									<div class="front-content__actions front-content__actions--section4">
										<?php if ( ! empty( $red_button_s4 ) ): ?>
							          		<button class="def-button def-button__positive def-button__positive--next def-button__positive--calculate" data-swiper-animation="fadeInDown" data-duration=".5s" data-delay=".8s"><?php echo $red_button_s4; ?></button>
							          	<?php endif; ?>
							          	<?php if ( ! empty( $grey_button_s4 ) ): ?>	
							          		<button class="def-button def-button__negative def-button__negative--back" data-swiper-animation="fadeInDown" data-duration=".5s" data-delay="1s"><?php echo $grey_button_s4; ?></button>
							        	<?php endif; ?>
							        </div>
						        <?php endif; ?>
							</div>
						</div>
					</div>
					<footer class="slide-section__footer"></footer>
				</section>
			
			<?php elseif( get_row_layout() == 'section_5' ): 
				$main_image_s5 = get_sub_field('main_image_s5');
	        	$job_text_s5 = get_sub_field('job_text_s5');
	        	$calculator_s5 = get_sub_field('calculator_s5');
	        	$money_if_s5 = get_sub_field('money_if_s5');
	        	$red_button_s5 = get_sub_field('red_button_s5');
	        	$grey_button_s5 = get_sub_field('grey_button_s5'); ?>
			
				<section class="slide-section swiper-slide slide-priority">
					<div class="slide-section__body">
						<?php if ( ! empty( $main_image_s5 ) ): ?>
						<div class="front-interactive slide-section__interactive slide-section__interactive-5<?php //echo $section_counter; //5 ?>">
							<div class="layer-0 front-interactive__img front-interactive__img--background">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_1_9.png" alt="">
							</div>
							<div class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-5">
								<img src="<?php echo $main_image_s5['sizes']['thumbnail_693x713']; ?>" alt="<?php echo $main_image_s5['alt']; ?>">
							</div>
							<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
							</div>
						</div>
						<?php endif; ?>
						<div class="front-content">
							<?php if ( ! empty( $job_text_s5 ) ): ?>
								<div class="front-content__slogans front-content__slogans--section5"
								     data-swiper-animation="fadeInDown" data-duration=".2s">
									<div class="front-content__job">
										<p class="text-medium"><?php echo $job_text_s5; ?></p>
									</div>
								</div>
							<?php endif; ?>
							<?php if ( ! empty( $calculator_s5 ) ): ?>
								<div class="front-content__titles front-content__titles--section5">
									<h2 class="front-content__title text-large" data-swiper-animation="fadeInDown"
									    data-duration=".2s" data-delay=".4s" data-anchor="calculate"><?php echo $calculator_s5; ?></h2>
								</div>
							<?php endif; ?>
							<div class="calculate-block front-content__calculate" data-swiper-animation="fadeInDown"
							     data-duration=".2s" data-delay=".6s">
								<?php if ( ! empty( $money_if_s5 ) ): ?>
									<header class="calculate-block__header">
										<p class="calculate-block__result text-large">
											<span class="calculate-block__value"></span>
											<span class="calculate-block__currency">₴</span>
										</p>
										<p class="calculate-block__condition text-default text-default--up"><?php echo $money_if_s5; ?></p>
									</header>
								<?php endif; ?>
								
								<?php if( have_rows('calculator_blocks_s5') ) : ?>
									<div class="calculate-block__body">
		    						<?php while ( have_rows('calculator_blocks_s5') ) : the_row();
		    							if( get_row_layout() == 'job_experience' ): 
		    								$experience_title = get_sub_field('experience_title'); ?>
												<div class="calculate-block__col calculate-block__col--50">
													<?php if ( ! empty( $experience_title ) ): ?>
														<h3 class="calculate-block__title text-default text-default--up"><?php echo $experience_title; ?></h3>
													<?php endif; ?>
													<div class="calculate-block__actions">
														<p class="calculate-block__action">
															<input type="radio" name="months" id="skill0month"
															       class="calculate-block__input" value="0 мес.">
															<label class="calculate-block__label text-default" for="skill0month">
																<?php _e( '0 мес.', '3f-white' ); ?>
															</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="months" id="skill2-6month"
															       class="calculate-block__input" value="1 мес." checked>
															<label class="calculate-block__label text-default" for="skill2-6month">
																<?php _e( '2 - 6 мес.', '3f-white' ); ?>
															</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="months" id="skillmore6month"
															       class="calculate-block__input" value="6 мес.">
															<label class="calculate-block__label text-default" for="skillmore6month">
																<?php _e( '> 6 мес.', '3f-white' ); ?>
															</label>
														</p>
													</div>
												</div>
										<?php elseif( get_row_layout() == 'language_level' ): 
											$language = get_sub_field('language'); ?>
												<div class="calculate-block__col calculate-block__col--50">
													<?php if ( ! empty( $language ) ): ?>
														<h3 class="calculate-block__title text-default text-default--up"><?php echo $language; ?></h3>
													<?php endif; ?>
													<div class="calculate-block__actions">
														<p class="calculate-block__action">
															<input type="radio" name="eng" id="skillpooreng"
															       class="calculate-block__input" value="плохо">
															<label class="calculate-block__label text-default"
															       for="skillpooreng">
																<?php _e( 'плохо', '3f-white' ); ?>
															</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="eng" id="skillconfidenteng"
															       class="calculate-block__input" value="уверенно" checked>
															<label class="calculate-block__label text-default" for="skillconfidenteng">
																<?php _e( 'уверенно', '3f-white' ); ?>
															</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="eng" id="skillfluencyeng"
															       class="calculate-block__input" value="свободно">
															<label class="calculate-block__label text-default" for="skillfluencyeng">
																<?php _e( 'свободно', '3f-white' ); ?>
															</label>
														</p>
													</div>
												</div>
										<?php elseif( get_row_layout() == 'work_hours' ): 
											$hours = get_sub_field('hours'); ?>
												<div class="calculate-block__col calculate-block__col--100">
													<?php if ( ! empty( $hours ) ): ?>
														<h3 class="calculate-block__title text-default text-default--up"><?php echo $hours; ?></h3>
													<?php endif; ?>
													<div class="calculate-block__actions">
														<p class="calculate-block__action">
															<input type="radio" name="hours" id="hour30" class="calculate-block__input"
															       value="30">
															<label class="calculate-block__label text-default" for="hour30">
																<?php _e( '30', '3f-white' ); ?>
															</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="hours" id="hour40" class="calculate-block__input"
															       value="40" checked>
															<label class="calculate-block__label text-default" for="hour40">
																<?php _e( '40', '3f-white' ); ?>
															</label>
														</p>
														<p class="calculate-block__action">
															<input type="radio" name="hours" id="hour50" class="calculate-block__input"
															       value="50">
															<label class="calculate-block__label text-default" for="hour50">
																<?php _e( '50', '3f-white' ); ?>
															</label>
														</p>
													</div>
												</div>
										<?php endif; ?>
		    						<?php endwhile; ?>
		    						</div>
								<?php endif; ?>
								<?php if ( ! empty( $red_button_s5 ) || ! empty( $grey_button_s5 ) ): ?>
									<div class="calculate-block__buttons">
										<?php if ( ! empty( $red_button_s5 ) ): ?>
											<button class="def-button def-button__positive def-button__positive--next def-button__facts"><?php echo $red_button_s5; ?></button>
										<?php endif; ?>
										<?php if ( ! empty( $grey_button_s5 ) ): ?>
											<button class="def-button def-button__negative def-button__negative--back"><?php echo $grey_button_s5; ?></button>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<footer class="slide-section__footer"></footer>
				</section>
			
	        <?php elseif( get_row_layout() == 'section_6' ): 
	        	$main_image_s6 = get_sub_field('main_image_s6');
	        	$job_text_s6 = get_sub_field('job_text_s6');
	        	$facts_studio_s6 = get_sub_field('facts_studio_s6');
	        	$work_abroad_s6 = get_sub_field('work_abroad_s6');
	        	$work_awards_s6 = get_sub_field('work_awards_s6');
	        	$red_button_s6 = get_sub_field('red_button_s6');
	        	$grey_button_s6 = get_sub_field('grey_button_s6'); ?>
	        
				<section class="slide-section swiper-slide slide-priority" data-anchor="facts">
					<div class="slide-section__body">
						<?php if ( ! empty( $main_image_s6 ) ): ?>
							<div class="front-interactive slide-section__interactive slide-section__interactive-6<?php //echo $section_counter; //6 ?>">
								<div class="layer-0 front-interactive__img front-interactive__img--background">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_6_4.png" alt="">
								</div>
								<div class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-6">
									<img src="<?php echo $main_image_s6['sizes']['thumbnail_409x713']; ?>" alt="<?php echo $main_image_s6['alt']; ?>">
								</div>
								<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
								</div>
							</div>
						<?php endif; ?>
						<div class="front-content">
							<?php if ( ! empty( $job_text_s6 ) ): ?>
								<div class="front-content__slogans front-content__slogans--section6"
								     data-swiper-animation="fadeInDown" data-duration=".2s">
									<div class="front-content__job">
										<p class="text text-medium"><?php echo $job_text_s6; ?></p>
									</div>
								</div>
							<?php endif; ?>
							<?php if ( ! empty( $facts_studio_s6 ) ): ?>
								<div class="front-content__titles front-content__titles--section6">
									<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
									    data-duration=".2s" data-delay=".4s"><?php echo $facts_studio_s6; ?></h2>
								</div>
							<?php endif; ?>
							<div class="front-content__progress">
								<?php if ( ! empty( $work_abroad_s6 ) ): ?>
									<p class="front-content__text text text-default" data-swiper-animation="fadeInDown"
									   data-duration=".2s" data-delay=".5s">
										<?php echo $work_abroad_s6; ?>
									</p>
								<?php endif; ?>
								<?php if( have_rows('awards_imgs_s6') ) : ?>
									<ul class="front-content__awards" data-swiper-animation="fadeInDown" data-duration=".2s"
								    data-delay=".6s">
		    						<?php while ( have_rows('awards_imgs_s6') ) : the_row(); 
		    							$award_s6 = get_sub_field('award_s6'); ?>
											<li class="front-content__award"><img src="<?php echo $award_s6['sizes']['thumbnail_127x122']; ?>" alt="<?php echo $award_s6['alt']; ?>"></li>
		    						<?php endwhile; ?>
		    						</ul>
								<?php endif; ?>
								<?php if ( ! empty( $work_awards_s6 ) ): ?>
									<p class="front-content__text text text-default" data-swiper-animation="fadeInDown"
									   data-duration=".2s" data-delay=".6s">
										<?php echo $work_awards_s6; ?>
									</p>
								<?php endif; ?>
							</div>
							<?php if ( ! empty( $red_button_s6 ) || ! empty( $grey_button_s6 ) ): ?>
								<div class="front-content__actions front-content__actions--section6">
									<?php if ( ! empty( $red_button_s6 ) ): ?>
										<button class="def-button def-button__positive def-button__positive--to7 popup-window__toForm"
										        data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".8s">
											<?php echo $red_button_s6; ?>
										</button>
									<?php endif; ?>
									<?php if ( ! empty( $grey_button_s6 ) ): ?>
										<button class="def-button def-button__negative def-button__negative--back"
										        data-swiper-animation="fadeInDown" data-duration=".2s" data-delay="1s">
											<?php echo $grey_button_s6; ?>
										</button>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<footer class="slide-section__footer"></footer>
				</section>
	        
	        <?php elseif( get_row_layout() == 'section_7' ): 
	        	$main_image_s7 = get_sub_field('main_image_s7');
	        	$job_text_s7 = get_sub_field('job_text_s7');
	        	$reviews_s7 = get_sub_field('reviews_s7');
	        	$red_button_s7 = get_sub_field('red_button_s7');
	        	$grey_button_s7 = get_sub_field('grey_button_s7'); ?>
	        
	 			<section class="slide-section swiper-slide slide-priority">
					<div class="slide-section__body">
						<?php if ( ! empty( $main_image_s7 ) ): ?>
							<div class="front-interactive slide-section__interactive slide-section__interactive-7<?php //echo $section_counter; //7 ?>">
								<div class="layer-0 front-interactive__img front-interactive__img--background">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_7_7.png" alt="">
								</div>
								<div class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-7">
									<img src="<?php echo $main_image_s7['sizes']['thumbnail_589x874']; ?>" alt="<?php echo $main_image_s7['alt']; ?>">
								</div>
								<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
								</div>
							</div>
						<?php endif; ?>
						<div class="front-content">
							<?php if ( ! empty( $job_text_s7 ) ): ?>
								<div class="front-content__slogans front-content__slogans--section7"
								     data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".4s">
									<div class="front-content__job">
										<p class="text text-medium"><?php echo $job_text_s7; ?></p>
									</div>
								</div>
							<?php endif; ?>
							<?php if ( ! empty( $reviews_s7 ) ): ?>
								<div class="front-content__titles front-content__titles--section7">
									<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
									    data-duration=".2s" data-delay=".6s"><?php echo $reviews_s7; ?></h2>
								</div>
							<?php endif; ?>
							<?php if( have_rows('good_team_s7') ) : ?>
								<div class="front-content__feedbacks feedback-slider" data-swiper-animation="fadeInDown"
							     data-duration=".2s" data-delay=".8s">
									<div class="front-content__slider feedback-slider__wrapper">
										<div class=" feedback-slider__container swiper-wrapper">
			    						<?php while ( have_rows('good_team_s7') ) : the_row(); 
			    							$team_review_s7 = get_sub_field('team_review_s7');
			    							$team_member_s7 = get_sub_field('team_member_s7'); ?>
												<div class="feedback-slider__slide swiper-slide">
													<?php if ( ! empty( $team_review_s7 ) ): ?>
														<p class="front-content__text text-default">
															<?php echo $team_review_s7; ?>
														</p>
													<?php endif; ?>
													<?php if ( ! empty( $team_member_s7 ) ): ?>
														<p class="front-content__user text-default"><?php echo $team_member_s7; ?></p>
													<?php endif; ?>
												</div>
			    						<?php endwhile; ?>
										</div>
									</div>
									<button class="feedback-slider__next">
										<span><img src="<?php echo get_template_directory_uri(); ?>/build/images/r_arrow.png" alt="right_arrow"></span>
									</button>
									<button class="feedback-slider__prev">
										<span><img src="<?php echo get_template_directory_uri(); ?>/build/images/l_arrow.png" alt="left_arrow"></span>
									</button>
								</div>
							<?php endif; ?>
							<?php if ( ! empty( $red_button_s7 ) || ! empty( $grey_button_s7 ) ): ?>	
								<div class="front-content__actions front-content__actions--section7">
									<?php if ( ! empty( $red_button_s7 ) ): ?>
										<button class="def-button def-button__positive def-button__positive-toForm"
										        data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".8s"><?php echo $red_button_s7; ?>
										</button>
									<?php endif; ?>
									<?php if ( ! empty( $grey_button_s7 ) ): ?>
										<button class="def-button def-button__negative def-button__negative--back"
										        data-swiper-animation="fadeInDown" data-duration=".2s" data-delay="1s"><?php echo $grey_button_s7; ?>
										</button>
									<?php endif; ?>
								</div>
							<?php endif; ?>	
						</div>
					</div>
					<footer class="slide-section__footer"></footer>
				</section>
	        
	        <?php elseif( get_row_layout() == 'section_8' ): 
	        	$main_image_s8 = get_sub_field('main_image_s8');
	        	$job_text_s8 = get_sub_field('job_text_s8');
	        	$profile_s8 = get_sub_field('profile_s8');
	        	$fill_profile_s8 = get_sub_field('fill_profile_s8');
	        	$contact_form_profile_s8 = get_sub_field('contact_form_profile_s8'); ?>
	        
				<section class="slide-section swiper-slide slide-priority">
					<div class="slide-section__body">
						<?php if ( ! empty( $main_image_s8 ) ): ?>
							<div class="front-interactive slide-section__interactive slide-section__interactive-8<?php //echo $section_counter; //8 ?>">
								<div class="layer-0 front-interactive__img front-interactive__img--background">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/top_z-index_8_1.png" alt="">
								</div>
								<div class="layer-1 front-interactive__img front-interactive__img--main front-interactive__img--section-8">
									<img src="<?php echo $main_image_s8['sizes']['thumbnail_449x884']; ?>" alt="<?php echo $main_image_s8['alt']; ?>">
								</div>
								<div class="layer-2 front-interactive__img front-interactive__img--subbackground">
									<img src="<?php echo get_template_directory_uri(); ?>/build/images/vector_smart_object_p.png" alt="">
								</div>
							</div>
						<?php endif; ?>	
						<div class="front-content">
							<?php if ( ! empty( $job_text_s8 ) ): ?>
								<div class="front-content__slogans front-content__slogans--section8"
								     data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".4s">
									<div class="front-content__job">
										<p class="text text-medium"><?php echo $job_text_s8; ?></p>
									</div>
								</div>
							<?php endif; ?>	
							<?php if ( ! empty( $profile_s8 ) ): ?>
								<div class="front-content__titles front-content__titles--section8">
									<h2 class="front-content__title text text-large" data-swiper-animation="fadeInDown"
									    data-duration=".2s" data-delay=".4s" data-anchor="last"><?php echo $profile_s8; ?></h2>
								</div>
							<?php endif; ?>	
							<div class="form-block front-content__form">
								<?php if ( ! empty( $fill_profile_s8 ) ): ?>
									<h3 class="form-block__title text text-default text-default--up"
									    data-swiper-animation="fadeInDown" data-duration=".2s" data-delay=".6s"><?php echo $fill_profile_s8; ?>
									</h3>
								<?php endif; ?>	
								
								<?php if ( ! empty( $contact_form_profile_s8 ) ):
										foreach( $contact_form_profile_s8 as $cf7 ):
									    	$cf7_id = $cf7->ID;
									    	$cf7_title = $cf7->post_title;
									    		echo do_shortcode( '[contact-form-7 id="' . $cf7_id . '" title="' . $cf7_title . '"]' ); 
									    endforeach;
							    	endif; ?>
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