<?php

register_post_type('press', array(  'label' => 'Press','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => true,'rewrite' => array('slug' => ''),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'labels' => array (
  'name' => 'Press',
  'singular_name' => '',
  'menu_name' => 'Press',
  'add_new' => 'Add Press',
  'add_new_item' => 'Add New Press',
  'edit' => 'Edit',
  'edit_item' => 'Edit Press',
  'new_item' => 'New Press',
  'view' => 'View Press',
  'view_item' => 'View Press',
  'search_items' => 'Search Press',
  'not_found' => 'No Press Found',
  'not_found_in_trash' => 'No Press Found in Trash',
  'parent' => 'Parent Press',
),) );