<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>	
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } ?>				
					<div class="entry-content">
						<?php the_content(); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


<?php endwhile; ?>

			</div><!-- #content -->
			<div class="subpages">
				<?php
					  if($post->post_parent)
					  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
					  else
					  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
					  if ($children) { ?>
					  <ul>
				<?php echo $children; ?>
					  </ul>
				<?php } ?>
			</div><!--#subpages-->
			
		</div><!-- #container -->
		

<?php get_footer(); ?>
