<?php
// Register Nav Walker class_alias

require_once('wp_bootstrap_navwalker.php');

// Theme support 

function wpb_theme_setup(){

	add_theme_support('post-thumbnails'); 
	//Nav Menus 
	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));

// POST FORMATS 
	add_theme_support('post-formats', array('aside', 'gallery'));
}

// add_action is used to create something
add_action('after_setup_theme', 'wpb_theme_setup');

// excerpt length control

function set_excerpt_length(){
	return 45;
}
// add_filter is used to addit something  - exerpt_lengt --> hook and after, name of my function
add_filter('excerpt_length', 'set_excerpt_length');


//widgeht locations 

function wpb_init_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Box1',
		'id' => 'box1',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Box2',
		'id' => 'box2',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Box3',
		'id' => 'box3',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

add_action('widgets_init', 'wpb_init_widgets'); 


// Customizer File 

require get_template_directory(). '/inc/customizer.php';  




