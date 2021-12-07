<?php

if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
		'name'=>'Sidebar Principal',
		'id'=>'sidebar-principal',
		'description'   => 'Side bar Principal',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));	
	
	register_sidebar(array(
		'name'=>'Rodapé',
		'id'=>'sidebar-rodape',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

}

$argsLogo = array(
	'width'         => 64,
	'height'        => 64,
	'uploads'       => true,
);

add_theme_support( 'custom-header', $argsLogo );

add_theme_support( 'post-thumbnails' );
// add theme support post and comment automatic feed links

add_theme_support('automatic-feed-links');
// add post formats support