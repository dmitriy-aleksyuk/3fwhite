<?php get_header(); ?>
	<div class="wrapper">
		<div class="container container--fluid swiper-container">
			<div class="swiper-wrapper global-wrapper" data-anchor="first">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'blocks/content', get_post_type() ); ?>
					<?php comments_template(); ?>
					<?php get_template_part( 'blocks/pager-single', get_post_type() ); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>