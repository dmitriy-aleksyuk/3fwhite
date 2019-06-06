<section class="slide-section swiper-slide slide-priority">
	<div class="slide-section__body slide-section__body--section1">
		<div class="front-content">
			<div class="front-content__titles front-content__titles--section1">
				<?php if ( is_single() ) :
				the_title( '<h1>', '</h1>' );
				else :
					the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>		
				<p class="meta-info">
					<a href="<?php echo get_date_archive_link() ?>" rel="bookmark">
						 <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
						  <?php the_time( 'F jS, Y' ) ?>
						 </time>
					</a>
					<?php _e( 'by', '3f-white' ); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
				</p>
				<div class="content">
					<?php the_post_thumbnail( 'full' ); ?>
					<?php if ( is_single() ) :
						the_content();
					else:
						theme_the_excerpt();
					endif; ?>
				</div>
				<?php wp_link_pages(); ?>
			</div>
		</div>
	</div>
	<footer class="slide-section__footer"></footer>
</section>
