<?php

// Create Location Custom Post Type
add_action('init', 'cptui_register_my_cpt_location');
function cptui_register_my_cpt_location() {
register_post_type('location', array(
'label' => 'Locations',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'location', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','thumbnail'),
'labels' => array (
  'name' => 'Locations',
  'singular_name' => 'Location',
  'menu_name' => 'Locations',
  'add_new' => 'Add Location',
  'add_new_item' => 'Add New Location',
  'edit' => 'Edit',
  'edit_item' => 'Edit Location',
  'new_item' => 'New Location',
  'view' => 'View Location',
  'view_item' => 'View Location',
  'search_items' => 'Search Locations',
  'not_found' => 'No Locations Found',
  'not_found_in_trash' => 'No Locations Found in Trash',
  'parent' => 'Parent Location',
)
) ); }

// Create Staff Custom Post Type
add_action('init', 'cptui_register_my_cpt_staff');
function cptui_register_my_cpt_staff() {
register_post_type('staff', array(
'label' => 'Staff',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'staff', 'with_front' => true),
'query_var' => true,
'supports' => array('title','revisions'),
'labels' => array (
  'name' => 'Staff',
  'singular_name' => 'Staff Member',
  'menu_name' => 'Staff',
  'add_new' => 'Add Staff Member',
  'add_new_item' => 'Add New Staff Member',
  'edit' => 'Edit',
  'edit_item' => 'Edit Staff Member',
  'new_item' => 'New Staff Member',
  'view' => 'View Staff Member',
  'view_item' => 'View Staff Member',
  'search_items' => 'Search Staff',
  'not_found' => 'No Staff Found',
  'not_found_in_trash' => 'No Staff Found in Trash',
  'parent' => 'Parent Staff Member',
)
) ); }

// Create Services Custom Post Type
add_action('init', 'cptui_register_my_cpt_service');
function cptui_register_my_cpt_service() {
register_post_type('service', array(
'label' => 'Services',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'service', 'with_front' => true),
'query_var' => true,
'supports' => array('title'),
'labels' => array (
  'name' => 'Services',
  'singular_name' => 'Service',
  'menu_name' => 'Services',
  'add_new' => 'Add Service',
  'add_new_item' => 'Add New Service',
  'edit' => 'Edit',
  'edit_item' => 'Edit Service',
  'new_item' => 'New Service',
  'view' => 'View Service',
  'view_item' => 'View Service',
  'search_items' => 'Search Services',
  'not_found' => 'No Services Found',
  'not_found_in_trash' => 'No Services Found in Trash',
  'parent' => 'Parent Service',
)
) ); }

// Create Specials Custom Post Type
add_action('init', 'cptui_register_my_cpt_special');
function cptui_register_my_cpt_special() {
register_post_type('special', array(
'label' => 'Specials',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'special', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','revisions','thumbnail','author','page-attributes'),
'labels' => array (
  'name' => 'Specials',
  'singular_name' => 'Special',
  'menu_name' => 'Specials',
  'add_new' => 'Add Special',
  'add_new_item' => 'Add New Special',
  'edit' => 'Edit',
  'edit_item' => 'Edit Special',
  'new_item' => 'New Special',
  'view' => 'View Special',
  'view_item' => 'View Special',
  'search_items' => 'Search Specials',
  'not_found' => 'No Specials Found',
  'not_found_in_trash' => 'No Specials Found in Trash',
  'parent' => 'Parent Special',
)
) ); }

?>