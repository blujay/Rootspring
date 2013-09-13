<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->
	<div id="footer" role="contentinfo">
      <div id="colophon">
        <div id="site-info"> <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
          </a> </div>
        <!-- #site-info -->
        <div id="site-generator">
          <?php do_action( 'twentyten_credits' ); ?>
          <a href="<?php echo esc_url( __('http://wordpress.org/', 'twentyten') ); ?>"
						title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'twentyten'); ?>" rel="generator"> <?php printf( __('Proudly powered by %s.', 'twentyten'), 'WordPress' ); ?> </a> </div>
        <!-- #site-generator -->
      </div>
      <!-- #colophon -->
    </div>
    <!-- #footer -->
  </div>
  <!--#scrollable-->
</div>
<!-- #wrapper -->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<script type="text/javascript">
	  jQuery.noConflict();
	  jQuery(document).ready(function() {
	  jQuery.noConflict();
	  jQuery('body').addClass('java');
	  jQuery.noConflict();
	  $('').draggable();
	  
   
		//$('#menu a[title], .back-pod a[title]').tooltip();
		//$("a[title]").tooltip({
   		// tweak the position
   			//offset: [10, 2],
   		   // use the "slide" effect
   			//effect: 'slide'

		// add dynamic plugin with optional configuration for bottom edge
		//}).dynamic({ bottom: { direction: 'down', bounce: true } });
		
		//slide in and out effect on services page	
		$('.service').click(function() {
		 $(this).find("div.service-text").slideToggle();
		});

  		$.preloadCssImages();
		$("a.cboxElement").each(function(index, link){
			link.href = link.href+'?iframe=true';
			//link.attr('href', link.attr('href')+'?iframe=true');
		});
		$("a.cboxElement").colorbox({iframe:true, innerWidth:440, innerHeight:600, initialWidth:200, initialHeight:300, transition:'elastic', speed:500});
		
  
 jQuery(function(){
	//portfolio thumb fadein fadeout
	jQuery('.content div.item').hover(function(){
		jQuery(this).find('img').fadeOut();
	}, function(){
		jQuery(this).find('img').fadeIn();

	});
});
 
 


<?php /*?>	<?php if(is_single(!in_category($blog_ID))) { ?>
	jQuery('#gallery').gallery();
	<?php } ?><?php */?>
});

 </script>
</body>
</html>