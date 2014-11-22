<?php
/*
* Template Name: About
*/
?>
<?php get_header(); ?>

<div id="page" class="container-fluid">
<div class="formatted">
<h1><span class="glyphicon glyphicon-tasks"></span> <span><?php the_title(); ?></span></h1>
<?php if (get_post_meta( get_the_ID(), 'minti_subtitle', true )) { ?>
      <h2><?php echo get_post_meta( get_the_ID(), 'minti_subtitle', true ); ?></h2>
    <?php } ?>

<div class="col-md-9 col-sm-9 content">
			

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div id="post-<?php the_ID(); ?>" class="post">
	
				<div class="entry">
	
					<?php the_content(); ?>
	
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
	
				</div>
	
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	
			</div>
			
			<?php //comments_template(); ?>
	
		<?php endwhile; endif; ?>

			<?php wp_reset_query(); ?>
			<?php $the_query = new WP_Query( 'post_type=team&order=ASC&showposts=-1' ); ?>

			<div class="clearfix col-md-11 col-sm-11">
            <h2>The Founding Team</h2>
	            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class('team'); ?>>
                    
                            <div class="team_ft_pic col-md-3 col-sm-3">
                            <?php if (has_post_thumbnail( $post->ID ) ) {?>
							
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            
                            <a class="prettyphoto" title="<?php the_title(); ?>" href="<?php echo $image[0]; ?>"><img src="<?php echo $image[0]; ?>" /></a> 
                            
                            <?php } else { ?>
                            
                             <div class="no_image"><p>No Image</p></div>
                            <?php } ?>
                     
							
                           </div>					

						    <div class="team_info col-md-9 col-sm-9">
                            <div class="team_title_positions">
							<h3><?php the_title(); ?></h3>
                           
                           <?php $terms = get_the_terms( get_the_ID(), array('position' )); ?>
                           <ul><?php if($terms) : foreach ($terms as $term) { echo '<li>'.$term->name; } endif; ?></ul>
                           </div>
						
							<!--<div class="text_description"><?php the_content(); ?></div>-->
                            <div class="text_description"><?php the_excerpt(); ?></div>
                            
                            </div>
                            
                            <div class="clear"></div>
                           
						   <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                           
					</div>
                    
                     <hr>

				<?php endwhile;?>
			</div>


			

		</div>
	

<div id="sidebar" class="col-md-3 col-sm-3">
		<?php get_sidebar(); ?>

	</div>

</div>

</div>
<?php get_footer(); ?>