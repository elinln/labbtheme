<?php 
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');


    add_action( 'wp_footer', 'min_egna_funktion' );

    function min_egna_funktion() {
       // echo 'banan';
    }

    
    add_action( 'elins-welcoming', 'hejsan_funktion');

    function hejsan_funktion() {
       // echo 'Välkommen hit!';
    }
?>