<?php
// Packages Custom post type
function slider_post_type() {
  $labels = array(
    'name' => 'slider',
    'singular_name' => 'Slide',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Slide',
    'edit_item' => 'Edit Slide',
    'new_item' => 'New Slide',
    'all_items' => 'All Slides',
    'view_item' => 'View Slide',
    'search_items' => 'Search Slide',
    'not_found' =>  'No Slider found',
    'not_found_in_trash' => 'No Slider found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Slides'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'slider' ),
    'capability_type' => 'page',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'thumbnail' )
  ); 

  register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post_type' );


add_action( 'init', 'slider_taxonomies', 0 );

function slider_taxonomies()
{
   // Add new taxonomy, make it hierarchical (like categories)
   $labels = array(
     'name' => _x( 'Slider Type', 'taxonomy general name' ),
     'singular_name' => _x( 'Slider Type', 'taxonomy singular name' ),
     'search_items' =>  __( 'Search Slider Type' ),
     'popular_items' => __( 'Popular Slider Type' ),
     'all_items' => __( 'All Slider Type' ),
     'parent_item' => __( 'Parent Slider Type' ),
     'parent_item_colon' => __( 'Parent Slider Type:' ),
     'edit_item' => __( 'Edit Slider Type' ),
     'update_item' => __( 'Update Slider Type' ),
     'add_new_item' => __( 'Add New Slider Type' ),
     'new_item_name' => __( 'New Slider Type Name' ),
   );
   register_taxonomy('slider-category',array('slider'), array(
     'hierarchical' => true,
     'labels' => $labels,
     'show_ui' => true,
     'query_var' => true,
     'rewrite' => array( 'slug' => 'slider-category' ),
   ));
}
