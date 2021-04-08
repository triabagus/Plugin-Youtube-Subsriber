<?php
/*
    ===================
        ADD ENQUEUE FUNCTIONS  
    ===================
*/
function yts_script_init(){

    // Add main css
    wp_enqueue_style('yts-style', plugins_url(). '/youtubesubs/assets/css/style.css');

    // Add main script
    wp_enqueue_script('yts-script', plugins_url(). '/youtubesubs/assets/js/main.js');

    // Add Google Script
    wp_register_script('google', 'https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');
}   

add_action('wp_enqueue_scripts', 'yts_script_init');