<?php
/**
 * Enqueue theme assets
 * 
 * @package Aquila
 */

namespace Aquila_Theme\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets{
    use Singleton;
    protected function __construct(){
        //load class.
        $this->setup_hooks();
    }
    protected function setup_hooks(){
        /**
         * Actions.
         */
        add_action('wp_enqueue_scripts',[$this,'register_styles']);
        add_action('wp_enqueue_scripts',[$this,'register_scripts']);
    }
    public function register_styles(){
        //Register Styles
        wp_register_style('style-css',get_stylesheet_uri(),[],filemtime(AQUILA_DIR_PATH. '/style.css'),'all');
        wp_register_style('bootstrap-css',AQUILA_DIR_URI. '/src/library/css/bootstrap.min.css',[],false,'all'); 
        //Enqueue Style
        wp_enqueue_style('style-css');  //we need to equeue it to make it appear
        wp_enqueue_style('bootstrap-css');
    }
    public function register_scripts(){
    // Register Script
    wp_register_script('main-js',AQUILA_DIR_URI.'/js/main.js',[],filemtime(AQUILA_DIR_PATH. '/js/main.js'),true);
    wp_register_script('bootstrap-js',AQUILA_DIR_URI.'/src/library/js/bootstrap.min.js',['jquery'],false,true);
    //Enqueue Script
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
    }
}
    