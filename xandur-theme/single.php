<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<?php
/*
	Single Post Template: Xandur theme single template
	Description: Use for posts on my site
*/
?>
<?php get_header();?>
				<?php while(have_posts()) : the_post();?>
				<?php if(has_post_thumbnail())?>
				<div id="page-top" class="banner single">
					<?php the_post_thumbnail();?>
				</div>
				<div id="first" class="inner">
					<section class="clearfix">
							<h3 class="main-titles single"><?php the_title();?></h3>
							<?php the_content() ?>
					</section>
					<hr>
				<?php comments_template(); ?>
				</div><!--End wrapper div-->
				<?php endwhile; ?>
<?php 
		if (is_home()) :
			get_footer('home'); 

		elseif (is_single() || is_404()) :
				get_footer('other');

		else :
			get_footer();

		endif;
?>