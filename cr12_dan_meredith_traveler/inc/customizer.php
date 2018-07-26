<?php

function wpb_customize_register($wp_customize){
//Showcase Section
$wp_customize->add_section('showcase', array(
	'titel' => __('Showcase', 'cr12_kathrin_renz_traveler'),
	'description' => sprintf(__('Options for showcase', 'cr12_kathrin_renz_traveler')),
	'priority' => 130
));

$wp_customize->add_setting('showcase_image', array(
	'default'  => get_bloginfo('template_directory').'/img/showcase.jpg',  /*this is going to show as a default value in the header */
	'type' => 'theme_mod'  /*specific to our theme  other possibilty our options*/
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
	'label' => __('Showcase Image', 'cr12_kathrin_renz_traveler'),
	'section' => 'showcase',
	'settings' => 'showcase_image',
	'priority'=>1

)));

$wp_customize->add_setting('showcase_heading', array(
	'default'  => _x('Travel the world', 'cr12_kathrin_renz_traveler'),  /*this is going to show as a default value in the header */
	'type' => 'theme_mod'  /*specific to our theme  other possibilty our options*/
));

$wp_customize->add_control('showcase_heading', array(
	'label' => __('Heading','cr12_kathrin_renz_traveler'),
	'section' => 'showcase', 
	'priority' => 2
));

$wp_customize->add_setting('showcase_text', array(
	'default'  => _x('Don´t forget to smile and breeth', 'cr12_kathrin_renz_traveler'),  /*this is going to show as a default value in the header */
	'type' => 'theme_mod'  /*specific to our theme  other possibilty our options*/
));

$wp_customize->add_control('showcase_text', array(
	'label' => __('Text','cr12_kathrin_renz_traveler'),
	'section' => 'showcase', 
	'priority' => 3
));

$wp_customize->add_setting('btn_url', array(
	'default'  => _x('http://alpenverein.com', 'cr12_kathrin_renz_traveler'),  /*this is going to show as a default value in the header */
	'type' => 'theme_mod'  /*specific to our theme  other possibilty our options*/
));

$wp_customize->add_control('btn_url', array(
	'label' => __('Button URL','cr12_kathrin_renz_traveler'),
	'section' => 'showcase', 
	'priority' => 4
));
$wp_customize->add_setting('btn_text', array(
	'default'  => _x('Explore', 'cr12_kathrin_renz_traveler'),  /*this is going to show as a default value in the header */
	'type' => 'theme_mod'  /*specific to our theme  other possibilty our options*/
));

$wp_customize->add_control('btn_text', array(
	'label' => __('Button Text','cr12_kathrin_renz_traveler'),
	'section' => 'showcase', 
	'priority' => 5
));
}

add_action('customize_register', 'wpb_customize_register');