<?php
// This file is generated. Do not modify it manually.
return array(
	'aos-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'hostel-blocks/aos-block',
		'version' => '0.1.0',
		'title' => 'AOS Block',
		'category' => 'widgets',
		'icon' => 'move',
		'description' => 'An AOS block for the West Coast Hostels website.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'animation' => array(
				'type' => 'string',
				'default' => 'fade-up'
			)
		),
		'textdomain' => 'aos-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	),
	'icon-picker' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'portfolio-blocks/icon-picker',
		'version' => '0.1.0',
		'title' => 'Icon Picker',
		'category' => 'media',
		'icon' => 'color-picker',
		'description' => 'Icon picker for displaying tech skills',
		'example' => array(
			
		),
		'keywords' => array(
			'icons',
			'skills',
			'portfolio'
		),
		'acf' => array(
			'mode' => 'auto',
			'renderTemplate' => './render.php'
		),
		'supports' => array(
			'anchor' => true,
			'align' => false
		),
		'textdomain' => 'icon-picker',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css'
	)
);
