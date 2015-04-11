<?php

function mba_time_ago() {
 
	global $post;
 
	$date = get_post_time('G', true, $post);
 
	// Array of time period chunks
	$chunks = array(
		array( 60 * 60 * 24 * 365 , __( 'year', 'mba' ), __( 'years', 'mba' ) ),
		array( 60 * 60 * 24 * 30 , __( 'month', 'mba' ), __( 'months', 'mba' ) ),
		array( 60 * 60 * 24 * 7, __( 'week', 'mba' ), __( 'weeks', 'mba' ) ),
		array( 60 * 60 * 24 , __( 'day', 'mba' ), __( 'days', 'mba' ) ),
		array( 60 * 60 , __( 'hour', 'mba' ), __( 'hours', 'mba' ) ),
		array( 60 , __( 'minute', 'mba' ), __( 'minutes', 'mba' ) ),
		array( 1, __( 'second', 'mba' ), __( 'seconds', 'mba' ) )
	);
 
	if ( !is_numeric( $date ) ) {
		$time_chunks = explode( ':', str_replace( ' ', ':', $date ) );
		$date_chunks = explode( '-', str_replace( ' ', '-', $date ) );
		$date = gmmktime( (int)$time_chunks[1], (int)$time_chunks[2], (int)$time_chunks[3], (int)$date_chunks[1], (int)$date_chunks[2], (int)$date_chunks[0] );
	}
 
	$current_time = current_time( 'mysql', $gmt = 0 );
	$newer_date = strtotime( $current_time );
 
	// Difference in seconds
	$since = $newer_date - $date;
 
	// Something went wrong with date calculation and we ended up with a negative date.
	if ( 0 > $since )
		return __( 'sometime', 'mba' );

	//Step one: the first chunk
	for ( $i = 0, $j = count($chunks); $i < $j; $i++) {
		$seconds = $chunks[$i][0];
 
		// Finding the biggest chunk (if the chunk fits, break)
		if ( ( $count = floor($since / $seconds) ) != 0 )
			break;
	}
 
	// Set output var
	$output = ( 1 == $count ) ? '1 '. $chunks[$i][1] : $count . ' ' . $chunks[$i][2];
 
 
	if ( !(int)trim($output) ){
		$output = '0 ' . __( 'seconds', 'mba' );
	}
 
	$output .= __(' ago', 'mba');
 
	return $output;
}
 
add_filter('the_time', 'mba_time_ago');

?>