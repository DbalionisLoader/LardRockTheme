<?php
// Add global styles of wp_head function
// array  
function lardrock_reg_styles(){
   wp_enqueue_style( 'lardrock_global_style', get_template_directory_uri() . "/style.css", array('lardrock_bootstrap_style'), '1.0', 'all' );
   wp_enqueue_style( 'lardrock_bootstrap_style', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '1.0', 'all' );
}

//Remove wp_head junk function
function remove_default_styles() {
   wp_dequeue_style('wp-block-library');
}

add_action('wp_enqueue_scripts','lardrock_reg_styles');
//add_action('wp_enqueue_scripts', 'remove_default_styles', 20);
?>