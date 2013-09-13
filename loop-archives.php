	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div <?php post_class(); ?>>
			<div class="smallthumb">
				<a class="cboxElement" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
			</div>
				
			<div class="entry-content">
			<h3 class="entry-title"><a class="cboxElement" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				<a class="cboxElement button" href="<?php the_permalink(); ?>">read more</a>
			</div><!-- .entry-content -->
		
		</div><!-- #post-## -->
	<?php endwhile; ?>
