<?php

if(!function_exists('customtheme_setup')) {
    function customtheme_setup() {

        add_theme_support( 'automatic-feed-links' );


        load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

        add_editor_style('./assets/css/style.css');
    }
}


add_action( 'after_setup_theme', 'customtheme_setup' );