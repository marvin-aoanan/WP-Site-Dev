<?php get_header(); ?>
<div class="line1"></div>
<div class="row">
	
<div id="page" class="container formatted">

		<h1><span class="glyphicon glyphicon-cog"></span> <span><?php the_title(); ?></h1>
        <?php if (get_post_meta( get_the_ID(), 'minti_subtitle', true )) { ?>
       <h2><?php echo get_post_meta( get_the_ID(), 'minti_subtitle', true ); ?></h2>
       <?php } ?>
		
		<div class="posts-nav" style="display:none;">
			<?php previous_post_link('<div class="posts-next">%link</div>', 'Next in category'); ?>
			<?php next_post_link('<div class="posts-prev">%link</div>', 'Prev in category'); ?>  
		</div>
	
	<div class="content col-md-9">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
	<div class="clearfix row">
	
				<div class="work-detail-thumb col-md-3">
				
				<?php if( get_post_meta( get_the_ID(), 'minti_embed', true ) == "" ){ ?>
				
				<div id="work-slider" class="flexslider2">
	    			<ul class="slides">
					<?php global $wpdb, $post;
				    $meta = get_post_meta( get_the_ID( ), 'minti_screenshot', false );
					$alt = get_the_title();
				    if ( !is_array( $meta ) )
				    	$meta = ( array ) $meta;
				    if ( !empty( $meta ) ) {
				    	$meta = implode( ',', $meta );
				    	$images = $wpdb->get_col( "
				    	SELECT ID FROM $wpdb->posts
				    	WHERE post_type = 'attachment'
				    	AND ID IN ( $meta )
				    	ORDER BY menu_order ASC
				    	" );
				    	foreach ( $images as $att ) {
				    		// Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
				    		$src = wp_get_attachment_image_src( $att, 'work-detail' );
				    		$src = $src[0];
				    		// Show image
				    		echo "<li data-thumb='{$src}'><a href='{$src}' class='prettyphoto' title='{$alt}'><img class='work_single_thumb' src='{$src}' /></a></li>";
				    	}
				    } ?>
			    	</ul>
			    </div>
			    
			    <?php } else { ?>
			    
			    <?php  
			    if (get_post_meta( get_the_ID(), 'minti_source', true ) == 'vimeo') {  
			        echo '<iframe src="http://player.vimeo.com/video/'.get_post_meta( get_the_ID(), 'minti_embed', true ).'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="600" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';  
			    }  
			    else if (get_post_meta( get_the_ID(), 'minti_source', true ) == 'youtube') {  
			        echo '<iframe width="600" height="338" src="http://www.youtube.com/embed/'.get_post_meta( get_the_ID(), 'minti_embed', true ).'?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe>';  
			    }  
			    else {  
			        echo get_post_meta( get_the_ID(), 'minti_embed', true ); 
			    }  
			    ?>
			    
			    <?php } ?>
			    
				</div>
				
				<div class="work-detail-description col-md-8">
					<h3>Project Title: <?php the_title(); ?></h3>
                    
                    <?php if (get_the_term_list($post->ID, 'filters')) { ?>
					<div class="taxonomy">
					<?php 
						$taxonomy = strip_tags( get_the_term_list($post->ID, 'filters', '', ', ', '') );
						echo '<strong>Category: </strong>' . $taxonomy;
					?></div>
                    <?php } ?>
                    
					<?php if (get_the_term_list($post->ID, 'teams')) { ?>
                      <div class="taxonomy">
					    <?php 
						$designer = strip_tags( get_the_term_list($post->ID, 'team', '', ', ', '') );
						echo '<strong>Team: </strong>'. $designer ;
						
					    ?>
                        
                        
                      </div>
                    <?php } ?>
                    
                    
					<div class="work-detail-description-content">
					<?php the_content(); ?>
                    </div>

	
					<?php if( get_post_meta( get_the_ID(), 'minti_link', true ) != "") { ?>
					<a href="<?php echo get_post_meta( get_the_ID(), 'minti_link', true ); ?>" target="_blank" class="button light"><?php _e('Visit Website', 'framework'); ?></a><?php } ?>
				</div>
	
	</div>
	
	
    <div class="col-md-11">
    <hr />
 
	<?php comments_template(); ?>
    </div>

	<?php endwhile; endif; ?>
	
	
	</div>
    
    <div id="sidebar" class="col-md-3">
     <?php get_sidebar(); ?>
    </div> 
	
	
</div>	
	

</div>
<div class="clear"></div>



<?php get_footer(); ?>