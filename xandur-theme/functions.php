<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<?php
	// Allow for featured images to be added to posts
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('custom-background');
	add_theme_support('custom-header');

	function register_my_menus(){
		register_nav_menus(
			array(
					'top-nav'=>__('Top Navigation'),
					'mobile-nav'=>__('Mobile Navigation')
				)
			);
	}
	add_action('init', 'register_my_menus');

	// 	add_action('init', 'create_custom_post');
	// function create_custom_post(){

	// 	$labels = array(
	// 		'name'				=>_x('Pricing', 'general name for post type'),
	// 		'singular_name' 	=>_x('Price', 'singular name for the post type'),
	// 		'add_new'			=>_x('Add New Price', 'cost'),
	// 		'add_new_item'		=>__('Add New Product'),
	// 		'edit_item'			=>__('Edit Product'),
	// 		'new_item'			=>__('New Products'),
	// 		'all_items'			=>__('All Products'),
	// 		'view_item'			=>__('View Product'),
	// 		'search_items'		=>__('Search Products'),
	// 		'not_found'			=>__('Product was not found'),
	// 		'not_found_trash'	=>__('No products found in the trash'),
	// 		'parent_item_colon'	=> '',
	// 		'menu_name'			=> 'Pricing'
	// 	);

	// 	$args = array(
	// 		'labels' 		=> $labels,
	// 		'description' 	=> 'holds information relating to prices for services',
	// 		'public'		=> 'true',
	// 		'menu_position'	=> 5,
	// 		'supports'		=> array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
	// 		'show_ui'		=> true,
	// 		'show_in_menu'	=> true

	// 	);

	// 	register_post_type('pricing', $args);
	// }

	// add_filter('pre_get_posts', 'main_loop_posts');

	// function main_loop_posts($query){
	// 	if( is_home() && $query->is_main_query()){
	// 		$query->set('post_type', array('post', 'pricing') );
	// 	}
	// 	return $query;
	// }

	// function custom_theme( $wp_customize ){
	// 	$wp_customize->add_setting('navigation_color', array(
	// 			'default'=>'#5e7c78',
	// 			'transport'=>'refresh',
	// 		));


	// 	$wp_customize->add_section('theme_color', array(
	// 		'title'		=> __('Theme Color', 'Peter Green\'s Hand Carwash'),
	// 		'priority'	=> 32,
	// 	));

		
	// 	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
	// 		'label'		=>__('Navigation Color', 'Peter Green\'s Hand Carwash'),
	// 		'section'	=>'theme_color',
	// 		'setting'	=>'navigation_color',
	// 		'priority'	=>1


	// 	)) );
	// }
	// add_action('customize_register', 'custom_theme');
?>