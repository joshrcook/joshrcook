<?php

/**
 * Registers the Main Navigation Menu so that it can be called in a template
 */

function register_menus() {
    
	register_nav_menu('primary-navigation', __('Main Navigation'));
        
}