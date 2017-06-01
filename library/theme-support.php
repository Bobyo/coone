<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

if ( ! function_exists( 'foundationpress_theme_support' ) ) :
function foundationpress_theme_support() {
	// Add language support
	load_theme_textdomain( 'foundationpress', get_template_directory() . '/languages' );

	// Add menu support
	add_theme_support( 'menus' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );

	// RSS thingy
	add_theme_support( 'automatic-feed-links' );

	// Add post formarts support: http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

}
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
return '<a class="more-link info button" href="' . get_permalink() . '">Read more!</a>';
}
function mysitemyway_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'link'  => '#',
    'target'    => '',
    'variation' => '',
    'size'  => '',
    'align' => '',
    ), $atts));

    $style = ($variation) ? ' '.$variation. '' : '';
    $align = ($align) ? ' align'.$align : '';
    $size = ($size == 'large') ? ' large_button' : '';
    $target = ($target == 'blank') ? ' target="_blank"' : '';
    $reflink = '?ref=Bobyo';

    $out = '<a' .$target. ' rel="nofollow" target="_blank" class="button_link' .$style.$size.$align. '" href="' .$link.$reflink. ' "><span>' .do_shortcode($content). '</span></a>';

    return $out;
}
add_shortcode('button', 'mysitemyway_button');

function webtreats_formatter($content) {
    $new_content = '';

    /* Matches the contents and the open and closing tags */
    $pattern_full = '{(\[raw\].*?\[/raw\])}is';

    /* Matches just the contents */
    $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';

    /* Divide content into pieces */
    $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

    /* Loop over pieces */
    foreach ($pieces as $piece) {
        /* Look for presence of the shortcode */
        if (preg_match($pattern_contents, $piece, $matches)) {

            /* Append to content (no formatting) */
            $new_content .= $matches[1];
        } else {

            /* Format and append to content */
            $new_content .= wptexturize(wpautop($piece));
        }
    }

    return $new_content;
}

function my_new_contactmethods( $contactmethods ) {
// Add Twitter
    $contactmethods['twitter'] = 'Twitter Handle';
//add Facebook
    $contactmethods['facebook'] = 'Facebook Name';
    return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);

add_action( 'after_setup_theme', 'foundationpress_theme_support' );
endif;
?>
