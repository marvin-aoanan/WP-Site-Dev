<?php get_header(); ?>
<div class="line1"></div>
<div class="row">
	
<div id="page" class="container formatted">

	<div class="content col-md-9">
    <h1><span class="glyphicon glyphicon-cog"></span> Project Title:<span class="work_title"> <?php the_title(); ?></span></h1>
        <?php if (get_post_meta( get_the_ID(), 'minti_subtitle', true )) { ?>
       <h2><?php echo get_post_meta( get_the_ID(), 'minti_subtitle', true ); ?></h2>
       <?php } ?>
    
     <div class="work_meta">
       <?php if (get_the_term_list($post->ID, 'filters')) { ?>
					<div class="taxonomy">
					<?php 
						$taxonomy = strip_tags( get_the_term_list($post->ID, 'filters', '', ', ', '') );
						echo '<strong>Category: </strong>' . $taxonomy;
					?></div>
                    <?php } ?>
                    
					<?php if (get_the_term_list($post->ID, 'team')) { ?>
                      <div class="taxonomy">
					    <?php 
						$designer = strip_tags( get_the_term_list($post->ID, 'team', '', ', ', '') );
						//echo '<strong>Team: </strong>'. $designer ;
					    
						?>
                        
                      </div>
                    <?php } ?>
                    
        <div class="posts-nav">
			<?php previous_post_link('<div class="posts-next">%link</div>', 'Next in category'); ?>
			<?php next_post_link('<div class="posts-prev">%link</div>', 'Prev in category'); ?>  
		</div>
                    
        </div>       
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
	<div class="clearfix">
     <p><strong>Project Preview:</strong></p>
	
				<div class="work-detail-thumb col-md-11">
				
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
				    		//echo "<li data-thumb='{$src}'><a href='{$src}' class='prettyphoto' title='{$alt}'><img class='work_single_thumb' src='{$src}' /></a></li>";
							echo "<li><img class='work_single_thumb' src='{$src}' /></li>";
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
				?>
                
			        <div class="work-detail-thumb" style="display:none;"><?php echo get_post_meta( get_the_ID(), 'minti_embed', true ); ?> </div>
			    <?php
                }  
			    ?>
			    
			    <?php } ?>
			    
				</div>
				
				<div class="work-detail-description col-md-11 clearfix">
					
                    <h3>Project Description:</h3>
					<div class="work-detail-description-content"><?php the_content(); ?> 
                    
                    <?php if( get_post_meta( get_the_ID(), 'minti_link', true ) != "") { ?>
					<a href="<?php echo get_post_meta( get_the_ID(), 'minti_link', true ); ?>" rel="nofollow" class="button light lytebox" rev="width:90% height:100%"><?php _e('VIEW SAMPLE', 'framework'); ?></a><?php } ?>
                    
                    <div class="spacer20"></div>
                    <div class="meta-tags">
				     <?php the_tags( '', '', ''); ?>
			        </div>
                    
                    </div>
					
				</div>
	
	</div>
	
	
    <div class="col-md-11">
 
	<?php comments_template(); ?>
    </div>

	<?php endwhile; endif; ?>
	
	
	</div>
    
    <div id="sidebar" class="col-md-3">
     <?php get_sidebar(); ?>
     <?php //get_sidebar( 'dynamic_sidebar' ); ?>
    </div> 
	
	
</div>	
	

</div>
<div class="clear"></div>



<?php get_footer(); ?>