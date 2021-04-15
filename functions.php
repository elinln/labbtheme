<?php 
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');


    add_action('after_setup_theme', 'registrera_meny');

    // Välja meny-placering
    function registrera_meny() {
        register_nav_menu('footermeny', 'Meny placerad i footer');
    }

    // Registrera menyer
    function register_my_menu(){
    register_nav_menu( 'huvudmeny' , 'Huvudmeny' );    
    register_nav_menu( 'footermeny' , 'Footermeny' );
    register_nav_menu( 'kontaktmeny', 'Kontaktmeny' );
    }
    

    add_action( 'after_setup_theme' , 'register_my_menu' );

    register_sidebar([
        'name' => 'Kort om oss widget',
        'Description' => 'Widget för footer',
        'id' => 'widgetone',
    ]);

    register_sidebar([
        'name' => 'Kontakt Widget',
        'Description' => 'Widget för footer',
        'id' => 'widgettwo',
    ]);

    register_sidebar([
        'name' => 'Social Media Widget',
        'Description' => 'Widget för footer',
        'id' => 'widgetthree',
    ]);

    register_sidebar([
        'name' => 'Search Widget',
        'Description' => 'Widget för sökfält i headern',
        'id' => 'searching'
    ]);

    register_sidebar([
        'name' => 'Contactform Widget',
        'Description' => 'Widget för contactform i Kontakt',
        'id' => 'contact'
    ]);

    register_sidebar([
        'name' => 'Headline Widget',
        'Description' => 'Widget för klickbar knapp i headern',
        'id' => 'headline'
    ]);
    


?>