<?php
/**
 * Register Menu.
 * 
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Assets;
use  AQUILA_THEME\Inc\Traits\Singleton;
 class Menus{
    use Singleton;
    protected function __construct(){
        //load class.
        Assets::get_instance();
        $this->setup_hooks();
    }
    protected function setup_hooks(){
        /**
         * Actions.
         */
        add_action('init',[$this,'register_menus']); //do this for get <title> in page

    }

    public function register_menus(){
        register_nav_menus([
            'aquila-header-menu' => esc_html__('Header Menu','aquila'),
            'aquila-footer-menu' => esc_html__('Footer_Menu','aquila')
        ]);
    }
    
    public function get_menu_id($location){
        //get all the location 
        $locations = get_nav_menu_locations();
        //Get object id by location
        $menu_id = $locations[$location];
        return !empty($menu_id)?$menu_id:'';

    }
    public function get_child_menu_items($menu_array,$parent_id){
        $child_menu = [];
        if(!empty($menu_array) && is_array($menu_array)){
            foreach($menu_array as $menu){
                if(intval($menu->menu_item_partent) === $parent_id){
                    array_push($child_menus,$menu);
                }
            }
        }
        return $child_menu;
    }
 }