<?php
/*
Template Name: portfolio page
*/



get_header(); ?>
		<div id="container">
		<div class="content" role="main">
              <h2 class="entry-title">Portfolio</h2>
              <?php query_posts('category_name=projects'); //retrieves the portfolio posts only ?>
              <?php $i=0;
						while (have_posts()) : the_post();$i++;?>
              <div class="item <?php if ($i == 1) { ?>alpha<?php } else if($i==3) {?> omega<?php $i = 0;} ?>"> <a href="<?php the_permalink(); ?>" class="cboxElement thumbnail sml">
                <?php the_post_thumbnail('thumbnail'); ?>
                <h3 class="title entry-title">
                  <?php the_title(); ?>
                </h3>
                </a>
                <div class="description shadow-1">
                  <?php the_excerpt();?>
                  <a href="<?php the_permalink(); ?>" class="cboxElement button">more</a>
                  <div class="cats">
                    <?php the_category(' '); ?>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
              <?php query_posts('pagename=portfolio/clients'); //retrieves the contact page only ?>
              <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
              </div>
              <!-- #post-## -->
              <?php endwhile; ?>
            </div>
		
		
			<!--#content-->

		</div><!-- #container -->

<?php /*?>					<div id="subpages">
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
			</div><!--#subpages--><?php */?>
<?php get_footer(); ?>
