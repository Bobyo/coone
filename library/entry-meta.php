<?php
/**
 * Entry meta information for posts
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		echo '<time class="updated meta__time--update meta__elem--oil" datetime="'. get_the_time( 'c' ) .'">'. sprintf( __( '%s at %s.', 'foundationpress' ), get_the_date(), get_the_time() ) .'</time>';
		echo '<p class="byline author meta__elem--oil meta__author--size">'. __( 'by', 'foundationpress' ) .' <a class="meta__elem--oil" href="'. get_author_posts_url( get_the_author_meta( 'ID' ) ) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
	}
endif;
?>
