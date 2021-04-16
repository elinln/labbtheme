<?php 
    
    // Lägga till support för widgets, meny osv...
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support( 'title-tag' );
    

    // Registrera menyer
    function register_my_menu(){
    register_nav_menu( 'huvudmeny' , 'Huvudmeny' );    
    register_nav_menu( 'footermeny' , 'Footermeny' );
    register_nav_menu( 'kontaktmeny', 'Kontaktmeny' );
    register_nav_menu('footermeny', 'Meny placerad i footer');

    }
    

    add_action( 'after_setup_theme' , 'register_my_menu' );


    /* Tre stycken Footer-widgets */
    register_sidebar([
        'name' => 'Kort om oss widget',
        'Description' => 'Widget för footer',
        'id' => 'widgetone',
        'before_widget' => false,
    ]);

    register_sidebar([
        'name' => 'Kontakt Widget',
        'Description' => 'Widget för footer',
        'id' => 'widgettwo',
        'before_widget' => false,
    ]);

    register_sidebar([
        'name' => 'Social Media Widget',
        'Description' => 'Widget för footer',
        'id' => 'widgetthree',
        'before_widget' => false,
    ]);
    
    /* Wdiget för sökfält i header */
    register_sidebar([
        'name' => 'Search Widget',
        'Description' => 'Widget för sökfält i headern',
        'id' => 'searching',
        'before_widget' => false,
    ]);
    /* Widget för kontaktformulär på Kontakt-sidan */
    register_sidebar([
        'name' => 'Contactform Widget',
        'Description' => 'Widget för contactform i Kontakt',
        'id' => 'contact',
        'before_widget' => false,
    ]);

    /* Widget för sidebar på Undersidorna */
    register_sidebar([
        'name' => 'Sidebar Widget',
        'Description' => 'Widget för sidebar',
        'id' => 'sidebar',
        'before_widget' => false,
    ]);
    /* Widget för sidebar på Blogg-sidan */
    register_sidebar([
        'name' => 'Blogg Sidebar Widget',
        'Description' => 'Widget för sidebar på bloggsidan',
        'id' => 'blogbar',
        'before_widget' => false,
    ]);
