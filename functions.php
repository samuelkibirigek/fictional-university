<?php
    function university_files(){
        //here we use the get_stylesheet_uri function to load the css in style.css
        //this basically points towards the css file we are trying to run
        wp_enqueue_style('university_main_styles', get_stylesheet_uri()); 
    }
    add_action('wp_enqueue_scripts', 'university_files');
?>