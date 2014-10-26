<?php
// Packages Custom post type
function award_post_type() {
  $labels = array(
    'name' => 'award',
    'singular_name' => 'award',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New award',
    'edit_item' => 'Edit award',
    'new_item' => 'New award',
    'all_items' => 'All awards',
    'view_item' => 'View award',
    'search_items' => 'Search award',
    'not_found' =>  'No award found',
    'not_found_in_trash' => 'No award found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Awards'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'award' ),
    'capability_type' => 'page',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor' )
  ); 

  register_post_type( 'award', $args );
}
add_action( 'init', 'award_post_type' );


add_action( 'init', 'award_taxonomies', 0 );

function award_taxonomies()
{
   // Add new taxonomy, make it hierarchical (like categories)
   $labels = array(
     'name' => _x( 'award Type', 'taxonomy general name' ),
     'singular_name' => _x( 'award Type', 'taxonomy singular name' ),
     'search_items' =>  __( 'Search award Type' ),
     'popular_items' => __( 'Popular award Type' ),
     'all_items' => __( 'All award Type' ),
     'parent_item' => __( 'Parent award Type' ),
     'parent_item_colon' => __( 'Parent award Type:' ),
     'edit_item' => __( 'Edit award Type' ),
     'update_item' => __( 'Update award Type' ),
     'add_new_item' => __( 'Add New award Type' ),
     'new_item_name' => __( 'New award Type Name' ),
   );
   register_taxonomy('award-category',array('award'), array(
     'hierarchical' => true,
     'labels' => $labels,
     'show_ui' => true,
     'query_var' => true,
     'rewrite' => array( 'slug' => 'award-category' ),
   ));
}
