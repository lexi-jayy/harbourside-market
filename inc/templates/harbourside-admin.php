<?php


function harbour_add_admin_page(){
    add_menu_page('Harbourside Options', 'Harbourside', 'manage_options', 'Harbourside_page', 'harbourside_create_page', get_template_directory_uri() . '/img/harbourside-logo.png', 110);
}
add_action('admin_menu', 'harbour_add_admin_page');

function harbourside_create_page(){
    
}