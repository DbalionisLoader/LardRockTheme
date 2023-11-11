<?php

//Add dynamic automatic wordpress title tag support - DISABLED - need attention
function lardrock_theme_support(){
   add_theme_support('title-tag');
}
//add_action('document_title_parts','lardrock_theme_support'); - DISABLED 

// Add global styles to wp_head function
// array argument controls the order of css files loading  
// PARAMS:
// stylesheet name, location, dependancy(order of loading), version, all???
function lardrock_reg_styles(){
   // Dynamic version param
   $version = wp_get_theme()->get('Version');
   //Get global style.css sheet from local dir
   wp_enqueue_style( 'lardrock_global_style', get_template_directory_uri() . "/style.css", array('lardrock_bootstrap_style'), $version, 'all' );
   //Get bootstrap styles from CDN - TODO: convert to a local dir critical styles only for for speed boost
   wp_enqueue_style( 'lardrock_bootstrap_style', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all' );
}

// Add js scripts to wp_head function
// PARAMS:
// Script name, location, dependancy(order of loading), version, load in footer (true or false); 
function lardrock_reg_js_scripts(){
   // Dynamic version param
   $version = wp_get_theme()->get('Version');
   
   //Get main.js script from local dir
   wp_enqueue_script( 'lardrock_main_js_script', get_template_directory_uri() . "/assets/js/main.js", array(), $version,true );
   
   //Get bootstrap script from CDN - TODO: convert to a local dir for critical scripts only for speed boost
   wp_enqueue_script( 'lardrock_bootstrap_js_script', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js", array(), '5.3.2',true);
   
   //EXTRAS
   //Include pooper.js and jquary.min.slim if needed here
}

//Remove wp_head junk function
function remove_default_styles() {
   wp_dequeue_style('wp-block-library');
}

//FUNCTION CALLS

//Call lardrock_reg_style function
add_action('wp_enqueue_scripts','lardrock_reg_styles');


//Call ardrock_reg_js_scripts function
add_action('wp_enqueue_scripts','lardrock_reg_js_scripts');
?>