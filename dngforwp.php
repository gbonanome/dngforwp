<?php
/*
Plugin Name: dngforwp
Plugin URI: https://github.com/gbonanome/dngforwp
Description: A little Wordpress plugin to better interact with DiscoveryNG.
Version: 0.1
Author: Giulio Bonanome
License: GPL2
*/

// Add Shortcode
function dng_shortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'url' => 'http://',
			'width' => '600',
			'height' => '300',
			'coversize' => 'normal',
			'showabstract' => 1
		), $atts )
	);

	// Code

	$src = str_replace('/view/','/badge/',$url);

	return '<iframe src="' . $src .'&showabstract=' . $showabstract .'&coversize=' . $coversize .'"	width="' . $width . '" height="' . $height . '"	frameborder="0"></iframe>';

}
add_shortcode( 'dng', 'dng_shortcode' );

?>
