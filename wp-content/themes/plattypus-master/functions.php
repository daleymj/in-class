<?php
//turn on sleeping features

//featured image support:
add_theme_support('post-thumbnails');

add_theme_support( 'post-formats', array( 'quote', 'link', 'audio', 'video', 'image',
		'gallery', 'aside', 'status' ) );

add_theme_support('custom-background');
//don't forget to show the header image in the header.php file
add_theme_support('custom-header', array(
	'width'         => 960,
	'height'        => 500,
	'flex-width'    => true,
	'flex-height'   => true,
	'default-image' => get_template_directory_uri() . '/images/marvel.png',
));

//don't forget the_custom_logo() to display it in your theme
add_theme_support('custom-logo', array(
	'width'         => 150,
	'height'        => 150,
	// 'flex-width'    => true,
	// 'flex-height'   => true,
));

//better RSS feed links. A must-have if you use the blog
add_theme_support('automatic-feed-links');

//improve the markup of wordPress generated code
add_theme_support('html5', array('search-form', 'comment-list', 'comment-form', 'gallery', 'caption',));

//improve title tag for SEO. Remove <title> from header.php
add_theme_support('title-tag');

/**
*Make the excerpts better - customize the number of words and change [...]
*@see https://developer.wordpress.org/reference/functions/the-excerpt/
*/
function platty_ex_length() {
	if (is_search()) {
		return 20; //words
	}else {
		return 75; //words
	}
}
add_filter('excerpt_length', 'platty_ex_length');

function platty_redmore() {
	return '<br><a href="' . get_permalink() . '" class="read-more" title="Keep Reading this post">Read More</a>';
}
add_filter('excerpt_more', 'platty_redmore');



//no close php
