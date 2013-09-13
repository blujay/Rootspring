//main jquery functions for rootspring theme
	  jQuery.noConflict();
	  jQuery(document).ready(function() {
	  jQuery.noConflict();
	  jQuery('body').addClass('java home scrollbar');
	  jQuery('body').removeClass('page');
	  jQuery('html, body.home').scrollTop(2250);
	  jQuery('html, body.home').scrollLeft(2290);
	  jQuery.noConflict();
	  $('').draggable();
	  
   
		$("#menu a[title]").tooltip({
   		// tweak the position
   			offset: [10, 2],
   		   // use the "slide" effect
   			effect: 'slide'

		// add dynamic plugin with optional configuration for bottom edge
		}).dynamic({ bottom: { direction: 'down', bounce: true } });
		
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
		
  function scrollToElement(id)
  {
  jQuery('html,body').animate({scrollTop: jQuery(id).offset().top, scrollLeft: jQuery(id).offset().left}, 1500, 'swing');
  }
  
  jQuery('#menu .home a, a.link-beans').live('click', function(event) {
  	event.preventDefault();
	scrollToElement("#header");
  }); 
  
  jQuery('#menu .services a, a.services').live('click', function(event) {
  	event.preventDefault();
	scrollToElement("#services");
  }); 
  
  jQuery('#menu .portfolio a, a.portfolio').live('click', function(event) {
  	event.preventDefault();
	scrollToElement("#portfolio");

  }); 
  
  jQuery('#menu .about a, a.about').live('click', function(event) {
  	event.preventDefault();
	scrollToElement("#about");
  }); 

  
	jQuery('#menu .blog a, a.blog').live('click', function(event) {
  	event.preventDefault();
	scrollToElement("#blog");
  });
  
  jQuery('#menu .contact a, a.contact').live('click', function(event) {
  	event.preventDefault();
	scrollToElement("#contact");
  });  

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


function make_dynamic(container_select, links_select)
{
	var hash = window.location.hash.substr(1);
	var href = $(links_select).each(function(){
		var href = $(this).attr('href');
		if(hash==href){
			var toLoad = hash+'.html .hentry';
			$(container_select).load(toLoad)
		}											
	});

	$(links_select).click(function(){
		var toLoad = $(this).attr('href')+' .hentry';	  
		window.location.hash = $(this).attr('href');
		$(container_select).load(toLoad,'');
		return false;
		
	});
}

$(document).ready(function() {
	make_dynamic('#latest-post','#primary li a');
	make_dynamic('#about .hentry','#about .subpages li a');
});
