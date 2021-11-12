<?php
/**
 * The site's entry point.
 *
 * Loads the relevant template part,
 * the loop is executed (when needed) by the relevant template part.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

echo 'hi';
$args = array(  
	'post_type' => 'vegtables',
	'post_status' => 'publish',
);
$loop = new WP_Query( $args ); 

while ( $loop->have_posts() ) : $loop->the_post(); 
print the_title(); 
the_excerpt(); 
endwhile;

wp_reset_postdata(); 


get_footer();
