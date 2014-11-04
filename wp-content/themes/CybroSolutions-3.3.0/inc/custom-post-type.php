<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {

register_post_type('about', array(  'label' => 'About Us','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => '', 'with_front'=>false),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'labels' => array (
  'name' => 'About Us',
  'singular_name' => '',
  'menu_name' => 'About Us',
  'add_new' => 'Add About Us',
  'add_new_item' => 'Add New About Us',
  'edit' => 'Edit',
  'edit_item' => 'Edit About Us',
  'new_item' => 'New About Us',
  'view' => 'View About Us',
  'view_item' => 'View About Us',
  'search_items' => 'Search About Us',
  'not_found' => 'No About Us Found',
  'not_found_in_trash' => 'No About Us Found in Trash',
  'parent' => 'Parent About Us',
),) );





}
