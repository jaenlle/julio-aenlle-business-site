<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {

    register_sidebar( array(
      /*consider the word sidebar as another term for widgets
      from back when WordPress put widgets on a sidebar*/
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-footer widget-left"">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
    }

    //First Footer Widget
      register_sidebar( array (
        'name'            =>  ('Left Footer Widget'),
        'id'              =>  'footer-one',
        'description'     =>  'Left widget in the footer',
        'before_widget'   =>  '<div class="widget-footer widget-middle">',
        'after_widget'    =>  '</div>',
        'before_title'    =>  '<h3>',
        'after_title'     =>  '</h3>'
      ));
    //Second Footer Widget
    register_sidebar( array (
        'name'            =>  ('Middle Footer Widget'),
        'id'              =>  'footer-two',
        'description'     =>  'Middle widget in the footer',
        'before_widget'   =>  '<div class="widget-footer widget-right"">',
        'after_widget'    =>  '</div>',
        'before_title'    =>  '<h3>',
        'after_title'     =>  '</h3>'
    ));
    //Third Footer Widget
    register_sidebar( array (
        'name'            =>  ('Right Footer Widget'),
        'id'              =>  'footer-three',
        'description'     =>  'Right widget in the footer',
        'before_widget'   =>  '<div class="widget-sidebar">',
        'after_widget'    =>  '</div>',
        'before_title'    =>  '<h3>',
        'after_title'     =>  '</h3>'
    ));

    add_action('widgets_init', 'blank_widgets_init');



    add_theme_support('menus');


/*-------------- Enable Post Thumbnails --------------- */

    add_theme_support( 'post-thumbnails' );

/*-------------- Enable Slider Plugin --------------- */

function enqueue_unslider() {
        wp_enqueue_script( // function to enqueue script
        'unslider', // name of our script (id)
        get_template_directory_uri() . '/js/unslider-min.js', // file loc
        array('jquery'), // dependencies
        '', // version - left blank
        true  // load in footer
      );
    }
    add_action('wp_enqueue_scripts', 'enqueue_unslider');

function slider_tutorial() {
    $labels = array(
    'name'               => _x( 'Slides', 'post type general name' ),
    'singular_name'      => _x( 'Slide', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'slides' ),
    'add_new_item'       => __( 'Add Slide' ),
    'edit_item'          => __( 'Edit Slides' ),
    'new_item'           => __( 'New Slide' ),
    'all_items'          => __( 'All Slides' ),
    'view_item'          => __( 'View Slides' ),
    'search_items'       => __( 'Search Slides' ),
    'not_found'          => __( 'No slides found' ),
    'not_found_in_trash' => __( 'No slides found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Slider'
    );

    $args = array(
    /*--- Begin Arguments Options ---*/
    'labels'        => $labels,
    'description'   => 'Slides for our Unslider integration',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    'has_archive'   => true,
    );

    register_post_type( 'slider', $args );
    }

    add_action( 'init', 'slider_tutorial' );

?>
