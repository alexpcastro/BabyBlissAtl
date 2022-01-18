<?php
wp_enqueue_style( 'style', get_stylesheet_uri() );
add_theme_support( 'post-thumbnails' );

// Function to change email address
 
// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'BabyBliss';
}
 
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );

?>