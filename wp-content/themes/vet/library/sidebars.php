<?php

function vet_register_sidebars() {
    register_sidebar(array(
        'id' => 'sidebar1',
        'name' => 'Main Sidebar',
        'description' => 'Used on every page BUT the homepage page template.',
        'before_widget' => '<dd class="accordion-navigation">',
        'after_widget' => '</div></dd>',
        'before_title' => '<a href="#___">',
        'after_title' => '</a><div id="___" class="content">',
    ));

    register_sidebar(array(
        'id' => 'sidebar2',
        'name' => 'Homepage Sidebar',
        'description' => 'Used only on the homepage page template.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
}

add_action( 'widgets_init', 'vet_register_sidebars' );
