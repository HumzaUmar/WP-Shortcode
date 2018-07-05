<?php  

function footer_date( $atts ) {
	return date("Y");;
}
add_shortcode( 'year', 'footer_date' );

?>
