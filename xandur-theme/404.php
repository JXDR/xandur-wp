<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<?php get_header();?>
				<div id="page-top" class="fourohfour">
					
				</div>
				<div id="first" class="inner">
					<section class="clearfix">
							<h3 class="main-titles single">Error 404 Content not found</h3>
							<p>It appears the page that you were looking for cannot be found.</p>
					</section>
				</div><!--End wrapper div-->
<?php 
		if (is_home()) :
			get_footer('home'); 

		elseif (is_single() || is_404()) :
				get_footer('other');

		else :
			get_footer();

		endif;
?>