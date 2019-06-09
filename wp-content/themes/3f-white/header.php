<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( ! empty( $main_logo = get_field( 'main_logo', 'options' ) ) ): ?>
	<div class="preloader">
		<div class="preloader__interactive">
			<div class="preloader__img">
				<img src="<?php echo $main_logo['sizes']['thumbnail_53x42']; ?>" alt="<?php echo $main_logo['alt']; ?>">
			</div>
			<span class="preloader__progress"></span>
		</div>
	</div>
<?php endif; ?>
<header class="main-header">
	<div class="container container--fluid">
		<div class="main-header__wrap">
			<?php if ( ! empty( $main_logo ) ): ?>
				<div class="main-header__logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo $main_logo['sizes']['thumbnail_53x42']; ?>"
						     alt="<?php echo $main_logo['alt']; ?>">
					</a>
				</div>
			<?php endif; ?>
			<button class="main-header__burger">
				<svg class="ham ham6" viewBox="0 0 100 100" width="50">
					<path
						class="line top"
						d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272"/>
					<path
						class="line middle"
						d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272"/>
					<path
						class="line bottom"
						d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272"/>
				</svg>
			</button>
			<div class="main-header__social">
			<?php if ( have_rows( 'header_menu', 'options' ) ): ?>
				<ul class="main-header__list">
					<?php while ( have_rows( 'header_menu', 'options' ) ) : the_row(); ?>
						<?php if ( get_row_layout() == 'phone' ): 
							if ( ! empty( $phone_number = get_sub_field('phone_number' ) ) ): ?>
								<li class="main-header__item main-header__item--phone">
									<a class="main-header__link" href="tel:<?php echo clean_phone($phone_number); ?>"><?php echo $phone_number; ?></a>
								</li>
							<?php endif; ?>
							
								<!-- hardcode -->
								<li class="main-header__item main-header__item--toForm">
									<a class="main-header__link def-button__positive-toForm" href="#">записаться</a>
								</li>
								<!-- /hardcode -->
						<?php elseif ( get_row_layout() == 'telegram' ): 
							$telegram_link = get_sub_field('telegram_link');
							$telegram_name = get_sub_field('telegram_name'); ?>
							<?php if( ! empty( $telegram_link ) && ! empty( $telegram_name ) ): ?>
								<li class="main-header__item main-header__item--telegram">
									<a class="main-header__link" href="<?php echo esc_url($telegram_link); ?>"><?php echo $telegram_name; ?></a>
								</li>
							<?php endif; ?>
						<?php elseif ( get_row_layout() == 'email' ): 
							if ( ! empty( $mail_box = get_sub_field('mail_box') ) ): ?>
								<li class="main-header__item main-header__item--main">
									<a class="main-header__link" href="mailto:<?php echo antispambot($mail_box); ?>"><?php echo $mail_box; ?></a>
								</li>
							<?php endif; ?>
						<?php endif; ?>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			</div>
		</div>
	</div>
</header>