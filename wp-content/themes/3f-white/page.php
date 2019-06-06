<?php get_header(); ?>

	<div class="wrapper">
		<div class="container container--fluid swiper-container">
			<div class="swiper-wrapper global-wrapper" data-anchor="first">
				<section class="slide-section swiper-slide slide-priority">
					<div class="slide-section__body slide-section__body--section1">
						<div class="front-content">
							<div class="front-content__titles front-content__titles--section1">
								<?php while ( have_posts() ) : the_post(); ?>
									<?php the_title( '<div class="title"><h1>', '</h1></div>' ); ?>
									<?php the_post_thumbnail( 'full' ); ?>
									<?php the_content(); ?>
									<?php edit_post_link( __( 'Edit', '3f-white' ) ); ?>
								<?php endwhile; ?>
								<?php wp_link_pages(); ?>
								<?php comments_template(); ?>
							</div>
						</div>
					</div>
					<footer class="slide-section__footer"></footer>
				</section>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>