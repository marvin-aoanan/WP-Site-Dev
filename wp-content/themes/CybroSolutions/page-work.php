<?php
/*
Template Name: Work
*/
?>
<?php get_header(); ?>
<div class="line1"></div>

<div id="page" class="row">
<div class="container formatted">
<h1><span class="glyphicon glyphicon-cog"></span> <span><?php the_title(); ?></span> </h1>
<?php if (get_post_meta( get_the_ID(), 'minti_subtitle', true )) { ?>
      <h2><?php echo get_post_meta( get_the_ID(), 'minti_subtitle', true ); ?></h2>
    <?php } ?>

  <div class="col-md-12 content">
	
	<ul id="filters" class="clearfix">
            <li><a href="#" data-filter="*" class="active"><?php _e('Show All', 'framework'); ?></a></li>
			<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'filters', 'walker' => new Works_Walker1())); ?>
	</ul>
    <ul id="filters" class="clearfix" style="display:none;">
            <li>By Owner: </li>
			<li><a href="#" data-filter="*"><?php _e('Show All', 'framework'); ?></a></li>
			<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'team', 'walker' => new Works_Walker1())); ?>
	</ul>
    
	
	<div id="content-full" class="clearfix">
	
	<div id="container">
		<?php $args = array( 'post_type' => 'work', 'posts_per_page' => 999 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
			<?php $terms = get_the_terms( get_the_ID(), array('filters', 'team' )); ?>              	
			<div class="<?php if($terms) : foreach ($terms as $term) { echo 'term'.$term->term_id.' '; } endif; ?>">
				
				<div class="work-item">
				<?php if ( has_post_thumbnail()) { ?> 
				
					<?php if( get_post_meta( get_the_ID(), 'minti_lightbox', true ) == "yes" AND  get_post_meta( get_the_ID(), 'minti_embed', true ) != "") { ?>

						<?php if ( get_post_meta( get_the_ID(), 'minti_source', true ) == 'youtube' ) {  ?>
						
								<a href="http://www.youtube.com/watch?v=<?php echo get_post_meta( get_the_ID(), 'minti_embed', true ); ?>" class="prettyPhoto" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('work-thumb'); ?>
								</a>
	    				
	    				<?php } else if ( get_post_meta( get_the_ID(), 'minti_source', true ) == 'vimeo' ) { ?>
	    				
	    						<a href="http://vimeo.com/<?php echo get_post_meta( get_the_ID(), 'minti_embed', true ); ?>" class="prettyPhoto" title="<?php the_title(); ?>">
	    							<?php the_post_thumbnail('work-thumb'); ?>
	    						</a>
	
	    				<?php } else if ( get_post_meta( get_the_ID(), 'minti_source', true ) == 'own' ) {?>
	
	
	    						<a href="#embedd-video" class="prettyPhoto" title="<?php the_title(); ?>">
	    							<?php the_post_thumbnail('work-thumb'); ?>
	    						</a>
	    						
	    						<div id="embedd-video">
									<p><?php echo get_post_meta( get_the_ID(), 'minti_embed', true ); ?></p>
								</div>
								
						<?php } ?>
					
				<?php } else if ( get_post_meta( get_the_ID(), 'minti_lightbox', true ) == "yes" AND  get_post_meta( get_the_ID(), 'minti_embed', true ) == "") { ?>
				
						<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="prettyPhoto" title="<?php the_title(); ?>">
	    							<?php the_post_thumbnail('work-thumb'); ?>
	    				</a>
				
				<?php } else if ( get_post_meta( get_the_ID(), 'minti_lightbox', true ) == "no" AND  get_post_meta( get_the_ID(), 'minti_embed', true ) == "") { ?>
                
                
                       <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(300, 300), false, '' ); ?>
				
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="pic">
	    							<div style="background:url('<?php echo $src[0]; ?>') top center no-repeat; width:220px; height:140px; background-size:cover; -moz-background-size:cover; -webkit-background-size:cover;"></div>
	    				</a>
				
				<?php } else if ( get_post_meta( get_the_ID(), 'minti_lightbox', true ) == "no" AND  get_post_meta( get_the_ID(), 'minti_embed', true ) != "") { ?>
				
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="video">
	    							<?php the_post_thumbnail('work-thumb'); ?>
	    				</a>
				
				<?php } else { ?>
					
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="pic">
	    							<?php the_post_thumbnail('work-thumb'); ?>
	    				</a>
				
				<?php } ?>
				
				<?php } ?>
				
					<div class="work-description">
						<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
						<p><?php echo get_post_meta( get_the_ID(), 'minti_description', true ); ?></p>
					</div>
				</div>
			
			</div> <!-- end of terms -->	
			
		<?php endwhile; ?>
	</div>
	
	</div>
    
    </div>
	
  <div id="sidebar" class="col-md-3" style="display:none;">
   <?php get_sidebar(); ?>
  </div> 	

</div>

</div>

<?php get_footer(); ?>