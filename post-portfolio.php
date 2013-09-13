<?php
/*
Template Name Posts: Portfolio
*/



get_header(); ?>

		<div id="container">
			<div id="content" role="main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="inner" class="shadow-1">
				<p class="button close">close</p>
					<h3 class="entry-title"><?php the_title(); ?></h3>
	
						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						</div><!-- .entry-content -->
	
	<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
						
	<?php endif; ?>
	
	<?php endwhile; // end of the loop. ?>
</div>
			</div><!-- #content -->
		</div><!-- #container -->
		

<?php get_footer(); ?>
