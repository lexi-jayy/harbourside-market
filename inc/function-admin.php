<?php


/*
===============
ADMIN PAGE
===============


*/
function harbour_add_admin_page(){
    add_menu_page('Harbourside Options', 'Harbourside', 'manage_options', 'Harbourside_page', 'harbourside_create_page', get_template_directory_uri() . '/img/harbourside-logo.png', 110);

    add_submenu_page('Harbourside_page','Harbourside Theme Options', 'General', 'manage_options', 'Harbourside_page', 'harbourside_create_page');
    add_submenu_page('Harbourside_page', 'Pokemon CSS Options', 'Custom CSS', 'manage_options', 'Harbourside_page_css', 'haurbourside_theme_settings_page');

    add_action('admin_init', 'harbour_custom_settings');
}
add_action('admin_menu', 'harbour_add_admin_page');

function harbour_custom_settings(){
    register_setting('harbour-settings-group', 'first_name');
    add_settings_section('harbourside-sidebar-options', 'Sidebar Options', 'harbourside_sidebar_options', 'Harbourside_page');

    add_settings_field('sidebar-name', 'First Name', 'harbourside_sidebar_name', 'Harbourside_page', 'harboursidebar-sidebar-options' );
}

function harbourside_sidebar_options(){

}
function harbourside_sidebar_name(){
    
}
function harbourside_create_page(){
    
}
function haurbourside_theme_settings_page(){
    
}