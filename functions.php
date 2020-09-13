<?php
/*This file is part of Pers2020Child, twentytwenty child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
$post_type_object->template
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function Pers2020Child_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'Pers2020Child_enqueue_child_styles' );

/*Write here your own functions */

// PETJ GUTENBERG HACKS
// @check out this URL: https://awhitepixel.com/blog/wordpress-gutenberg-access-parse-blocks-with-php/

// new post: now with an img as first block
/*
function petj_register_template() {
    $post_type_object = get_post_type_object( 'post' );
    $post_type_object->template = array(
        array( 'core/image' ),
    );
}
*/
// add_action( 'init', 'petj_register_template' );


/* Add extra widget areas to the front page */

add_action( 'widgets_init', 'petj_frontPage_widgets' ); // add the widget

function petj_frontPage_widgets() {

    register_sidebar( array(
        'name'          => __( 'Frontpage Widget 1' ),
        'id'            => 'fpwidget-1',
        'before_widget' => '<div class="fpwidget widget-content">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title subheading heading-size-3">',
        'after_title'   => '</h3>',
    ) );

	register_sidebar( array(
        'name'          => __( 'Frontpage Widget 2' ),
        'id'            => 'fpwidget-2',
        'before_widget' => '<div class="fpwidget  widget-content">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title subheading heading-size-3">',
        'after_title'   => '</h3>',
    ) );

	register_sidebar( array(
        'name'          => __( 'Frontpage Widget 3' ),
        'id'            => 'fpwidget-3',
        'before_widget' => '<div class="fpwidget  widget-content">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title subheading heading-size-3">',
        'after_title'   => '</h3>',
    ) );
}
