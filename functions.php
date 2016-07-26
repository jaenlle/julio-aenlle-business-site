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



?>
