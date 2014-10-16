<?php

if (WP_DEBUG) {
    require_once 'library/dev.php';
}
require_once 'library/navigation.php';
require_once 'library/sidebars.php';
require_once 'library/scripts_styles.php';

if (!class_exists('Timber')){
    add_action( 'admin_notices', function(){
        echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . admin_url('plugins.php#timber') . '">' . admin_url('plugins.php') . '</a></p></div>';
    });
    return;
}

class VetSite extends TimberSite {
    function __construct() {

        add_theme_support('post-formats');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        add_filter('timber_context', array($this, 'add_to_context'));
        add_action('init', array($this, 'register_post_types'));
        add_action('init', array($this, 'register_taxonomies'));
        add_filter('get_twig', array($this, 'add_to_twig'));
        add_action('wp_enqueue_scripts', array($this, 'addScripts'));

        Timber::$dirname = array('views/templates', 'views');
        parent::__construct();
    }

    function add_to_context($data) {
        $data['nav'] = new TimberMenu(27);
        $data['user'] = new TimberMenu(29);
        $data['footer'] = new TimberMenu(28);
        $data['menuuser'] = array();
        $data['menuuser'][1] = 'button--tertiary top-bar__user--login';
        $data['menuuser'][2] = 'button--primary top-bar__user--signup';

        return $data;
    }

    function register_post_types(){
        //this is where you can register custom post types
    }

    function register_taxonomies(){
        //this is where you can register custom taxonomies
    }

    function add_to_twig($twig){
        /* this is where you can add your own fuctions to twig */
        $twig->addExtension(new Twig_Extension_StringLoader());
        $twig->addFilter('icon', new Twig_Filter_Function('get_icon_post_category'));
        return $twig;
    }
    function addScripts() {
    }
}

new VetSite();
