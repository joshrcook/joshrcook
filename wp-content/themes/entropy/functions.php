<?php

function add_menu_support() {
    
    add_theme_support('menus');
    
}

add_action('after_setup_theme', 'add_menu_support');

/**
 * Registers the Main Navigation Menu so that it can be called in a template
 */

function register_menus() {
    
	register_nav_menu('primary-navigation', __('Main Navigation'));
        
}