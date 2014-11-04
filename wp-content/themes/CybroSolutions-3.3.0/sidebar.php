<?php 
function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) return true;
    return false;
}


?>

<?php 


	if(is_page()){
		/* Page Sidebar */
		generated_dynamic_sidebar(); 
	} else
	
	if (is_post_type('work')){
     //work magic
	 dynamic_sidebar('Work Page Sidebar Widgets');
    }
	
	else 
	
	if (is_post_type('team')){
     //work magic
	 dynamic_sidebar('Work Page Sidebar Widgets');
    }
	
	else  {
		/* Blog Sidebar */
		if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Blog Sidebar Widgets') ) ;
	
	
	}
	
?>