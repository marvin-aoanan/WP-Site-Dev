<?php

register_post_type('testimonial', array(  'label' => 'Testimonial','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor'),'labels' => array (
  'name' => 'Testimonial',
  'singular_name' => '',
  'menu_name' => 'Testimonial',
  'add_new' => 'Add Testimonial',
  'add_new_item' => 'Add New Testimonial',
  'edit' => 'Edit',
  'edit_item' => 'Edit Testimonial',
  'new_item' => 'New Testimonial',
  'view' => 'View Testimonial',
  'view_item' => 'View Testimonial',
  'search_items' => 'Search Testimonial',
  'not_found' => 'No Testimonial Found',
  'not_found_in_trash' => 'No Testimonial Found in Trash',
  'parent' => 'Parent Testimonial',
),) );