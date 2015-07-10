<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<?php
/*
	Template Name: Photos
	Description: Temporary Template for Photos page
*/
?>
	<?php get_header();?>
				<?php while(have_posts()) : the_post() ;?>
				<div id="first" class="inner">
					<section class="clearfix">
							<h3 class="main-titles single"><?php the_title();?></h3>
							<div class="img-grid">
								<?php the_content() ?>
							</div>
							<?php wp_link_pages(); ?>
					</section>
				</div><!--End wrapper div-->
				<?php endwhile;?>
	<?php get_footer();?>