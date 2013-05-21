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
	return '<iframe 
			src="' . $url .'&showabstract=' . $showabstract .'&coversize=' . $coversize .'"
			width="' . $width . '"
			height="' . $height . '"
			frameborder="0"></iframe>';

}
add_shortcode( 'dng', 'dng_shortcode' );