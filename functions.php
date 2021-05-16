<?php 

function WP_kontakt_new_customize_register( $wp_customize ) {



}
//add_action('customize_register', 'Theme_YP_customize_register');

  
  //add_action('pre_get_posts','custom_post_type_cat_filter');

























  function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Read More', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function theme_register_nav_menu(){
	add_theme_support ( 'title-tag' );
	add_theme_support ('post-thumbnails', array ('post'));
	add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
}
}





function improved_trim_excerpt($text) {
	global $post;
	if ( '' == $text ) {
			$text = get_the_content('');
			$text = apply_filters('the_content', $text);
			$text = str_replace('\]\]\>', ']]&gt;', $text);
			$excerpt_length = 80;
			$words = explode(' ', $text, $excerpt_length + 1);
			if (count($words)> $excerpt_length) {
					array_pop($words);
					array_push($words, '<a href="'. get_permalink() . '">Читать дальше...</a>');
					$text = implode(' ', $words);
			}
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');



function HWL_page_scripts() {
	wp_enqueue_style('style-css', get_stylesheet_uri());																//підключення стилів
	//wp_enqueue_script('script-name', get_template_directory_uri() ) . '/js/exameple.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery' );   						//підключення скриптів
  wp_enqueue_script('script-js', get_template_directory_uri() . '/js/main.js', array(), null, true);					//підключення скриптів
}



add_action ('wp_enqueue_scripts', 'HWL_page_scripts')

?>
