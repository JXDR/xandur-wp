<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<?php get_header();?>
				<?php if(have_posts()):?>
				<?php if(has_post_thumbnail())?>
				<?php if (($wp_query->post_count) > 1):?>
				<?php while (have_posts()) : the_post();?>
				<div id="page-top" class="banner">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
				</div>
				<div id="first" class="inner">
					<section class="clearfix">
						<h3 class="main-titles"><a href="<?php the_permalink(); ?>"><?php the_title();?></h3></a>
						<h5 class="author">Published <?php the_date('F j, Y');?> by <?php the_author();?></h5>
						<?php the_excerpt() ?>
					</section>
				</div><!--End wrapper div-->
				<?php endwhile;?>
				<?php else: ?>
				<!--Second Article Starts-->
				<?php while(have_posts()) : the_post();?>
				<?php if(has_post_thumbnail())?>
				<div class="banner">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
				</div>
				<div id="second" class="inner">
					<section class="clearfix">
							<h3 class="main-titles"><a href="<?php the_permalink(); ?>"><?php the_title();?></h3></a>
							<h5 class="author">Published <?php the_date('F j, Y'); ?> by <?php the_author();?></h5>
							<?php the_content() ?>
					</section>
				</div><!--End wrapper div-->
				<?php endwhile;?>
				<?php endif;?>
				<span class="page-links old"><?php next_posts_link('< Older Posts') ;?></span>
				<span class="page-links new"><?php previous_posts_link('Newer Posts >') ;?></span>
				<?php else: ?>
					<div id="second" class="inner">
						<section class="clearfix">
							<p>Sorry there are no posts to be found!!!</p>
						</section>
					</div>
				<?php endif;?>
<?php 
		if (is_home()) :
			get_footer('home'); 

		elseif (is_single() || is_404()) :
				get_footer('other');

		else :
			get_footer();

		endif;
?>