<?php
/*
Template Name: blog page
*/



get_header(); ?>
			<div id="container" class="blog">
					<div id="content" role="main">
					<h2 class="entry-title">Blog...</h2>
						<?php $sticky = get_option('sticky_posts');
							$args = array(
								'posts_per_page' => 1,
								'post__in'  => $sticky,
								'caller_get_posts' => 1
							);
							query_posts($args);
							if($sticky[0]) {
							   // insert here your stuff...
							}
							 //retrieves the blog posts only ?>
						<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
							<div id="latest-post">
							<div <?php post_class(); ?>>
									<h3 class="entry-title"><?php the_title(); ?></h3>	
								<div class="entry-content">
									<?php the_content(); ?>
									<div class="entry-meta">
										This entry was posted on <?php the_time('l, F jS, Y') ?>
									</div>
								</div><!-- .entry-content -->
							
							</div><!-- #post-## -->
						</div><!--#latest-post-->
						<?php comments_template( '', true ); ?>
						<?php endwhile; ?>
					</div><!-- #content -->
					<?php get_sidebar(); ?>
				</div><!-- #container -->


<?php get_footer(); ?>
