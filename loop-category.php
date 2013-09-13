
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div <?php post_class(); ?>>
				<div class="smallthumb">
					<a class="cboxElement" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
				</div>
					
				<div class="entry-content">
				<h3 class="entry-title"><a class="cboxElement" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="excerpt"><?php the_excerpt('long_excerpt'); ?></div>
					<a class="button" href="<?php the_permalink(); ?>">read more</a>
				</div><!-- .entry-content -->
			
			</div><!-- #post-## -->
		<?php endwhile; ?>
