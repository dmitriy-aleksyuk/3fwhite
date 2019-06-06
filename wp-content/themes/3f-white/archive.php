<?php get_header(); ?>

<div class="wrapper">
	<div class="container container--fluid swiper-container">
		<div class="swiper-wrapper global-wrapper" data-anchor="first">
			<?php if ( have_posts() ) : ?>
				<div class="title">
					<?php the_archive_title( '<h1>', '</h1>' ); ?>
				</div>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'blocks/content', get_post_type() ); ?>
				<?php endwhile; ?>
				<?php get_template_part( 'blocks/pager' ); ?>
			<?php else : ?>
				<?php get_template_part( 'blocks/not_found' ); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>