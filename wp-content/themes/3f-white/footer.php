<?php if( have_rows('popup_blocks', 'options') ) : $item_counter = 0; ?>
	<div class="popup-overlay">
    <?php while ( have_rows('popup_blocks', 'options') ) : the_row(); 
    		$item_counter++;
    		$popup_top_image = get_sub_field('popup_top_image');
			$popup_money_image = get_sub_field('popup_money_image');
			$popup_title = get_sub_field('popup_title');
			$popup_button = get_sub_field('popup_button');
            if( $item_counter == 1 ) :
                $popup_window = ''; 
    			$image_size = $popup_top_image['sizes']['thumbnail_1248x297'];
            elseif ( $item_counter == 2 ) :
            	$popup_window = ' popup-window--second'; 
    			$image_size = $popup_top_image['sizes']['thumbnail_1248x297'];
    		elseif ( $item_counter == 3 ) :
            	$popup_window = ' popup-window--third'; 
    			$image_size = $popup_top_image['sizes']['thumbnail_1215x603'];
    			$image_money_size = $popup_money_image['sizes']['thumbnail_140x126'];
    		endif; ?>

			<div class="popup-window<?php echo $popup_window; ?>" data-popup-content="step-to-<?php echo $item_counter; ?>">
				<?php if ( ! empty( $popup_top_image ) ): ?>
					<div class="popup-window__imgs">
						<div class="popup-window__img popup-window__img--4">
							<img src="<?php echo $image_size; ?>" alt="<?php echo $popup_top_image['alt']; ?>">
						</div>
					</div>
				<?php endif; ?>
				<div class="popup-overlay__wrap">
					<?php if ( ! empty( $popup_money_image ) ): ?>
						<!-- money as separate items -->
						<div class="popup-overlay__bill">
							<img src="<?php echo $image_money_size; ?>" alt="<?php echo $popup_money_image['alt']; ?>">
						</div>
					<?php endif; ?>
					<span class="popup-overlay__divider"><?php _e( 'или', '3f-white' ) ?></span>
					<!-- button of close -->
					<button class="popup-overlay__close">
						<span><?php _e( 'Esc', '3f-white' ) ?></span>
					</button>
					<div class="popup-window__content">
						<div class="popup-window__container">
							<?php if ( ! empty( $popup_title ) ): ?>
								<h3 class="popup-window__title"><?php echo $popup_title; ?></h3>
							<?php endif; ?>
							<?php if( have_rows('popup_description') ) : ?>
    						<?php while ( have_rows('popup_description') ) : the_row(); 
    							$description_text = get_sub_field('description_text');?>
    							<p class="popup-window__text"><?php echo $description_text; ?></p>
    						<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<?php if ( ! empty( $popup_button ) ): ?>
						<div class="popup-window__action">
							<button class="popup-window__try popup-window__try-4 popup-window__toForm"><?php echo $popup_button; ?></button>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>

    <?php endwhile; ?>
	</div>
<?php endif; ?>

<?php if( have_rows('sections_bilder') ): $s_counter = 0; ?>
<?php while ( have_rows('sections_bilder') ) : the_row(); $s_counter++;
		$contact_form_sections = get_sub_field('contact_form_profile_s8');
		if ( ! empty( $contact_form_sections ) ):
			$forms_counter = $s_counter; // counter for js
			foreach( $contact_form_sections as $forms7 ):
		    	$form_title = $forms7->post_title;
		    endforeach;
		 	$arr_forms_num = array(array( $form_title => $forms_counter)); 
		 	//print_r($arr_forms_num); echo '11111'; ?>
		 <?php endif;?>
<?php endwhile; ?>
<?php endif;?>
		
<script src="<?php echo get_template_directory_uri(); ?>/build/js/vendor/jquery_3.3.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/js/vendor/slider.js"></script>
<!--<script src="js/vendor/slick.min.js"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/build/js/vendor/tweenMax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/js/vendor/slider.anim.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/build/js/build.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>