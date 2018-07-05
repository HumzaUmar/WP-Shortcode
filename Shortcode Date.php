<?php 

function displayTodaysDate( $atts )
 
{
 
return date(get_option('date_format'));
 
}
 
add_shortcode( 'datetoday', 'displayTodaysDate');


 ?>
