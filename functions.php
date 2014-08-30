<?php
/**
 * Twenty Thirteen A11y Plus functions and definitions
 *
 * Adds the child theme's stylesheet.
 *
 * Child themes are awesome!
 * Read more here: http://codex.wordpress.org/Child_Themes
 *
 * @package Twenty Thirteen A11y Plus
 */

// More on this method of loading styles in a child theme:
// http://kovshenin.com/2014/child-themes-import/
function twentythirteena11yplus_scripts() {
    wp_enqueue_style( 'twentythirteen-style-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'twentythirteena11yplus_scripts' );