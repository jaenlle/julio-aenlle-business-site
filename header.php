<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php bloginfo ('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href ="<?php bloginfo('stylesheet_url'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="container">
        <header class="row">
            <div class="twelve columns head">
                <a href="http://www.julioaenlle.net/slicksautobody" target="_self"><img class="bannerimage" src="http://julioaenlle.net/slicksautobody/wp-content/uploads/2016/07/logo_green.png"/></a>
                <div class="number">
                    <h1>1-866-555-0785</h1>
                    <a href="/slicksautobody/page_contactform.php">Find a location</a>
                </div>
            </div>
        </header>

          <div class="row"> <!-- this div houses the menu -->
              <div class="twelve columns nav">
                  <?php wp_nav_menu( array(
                          'sort_column'     =>  'menu_order',
                          'container_class' =>  'blank-menu-header'
                      )); ?>
              </div>
          </div>
