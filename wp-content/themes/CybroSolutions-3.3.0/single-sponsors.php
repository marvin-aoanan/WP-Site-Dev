<?php get_header(); ?>
<div class="line1"></div>
<div id="page" class="row">
<div class="container formatted">

<h1><span class="glyphicon glyphicon-user"></span> <span>The Amazon.com</span></h1>


<div class="col-md-9 content">
			

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div id="post-<?php the_ID(); ?>" class="post">
	
				<div class="entry team">
                 <div class="team_ft_pic col-md-3">
                            <?php if (has_post_thumbnail( $post->ID ) ) {?>
							
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            
                            <a class="prettyphoto" title="<?php the_title(); ?>" href="<?php echo $image[0]; ?>"><img src="<?php echo $image[0]; ?>" /></a> 
                            
                            <?php } else { ?>
                            
                             <div class="no_image"><p>No Image</p></div>
                            <?php } ?>
                     
							
                           </div>		
	
					<!--<?php the_content(); ?>-->
                    
                     <div class="team_info col-md-9">
                            <div class="team_title_positions">
							<h3><?php the_title(); ?></h3>
                           
                           <?php $terms = get_the_terms( get_the_ID(), array('company' )); ?>
                           <ul><?php if($terms) : foreach ($terms as $term) { echo '<li>'.$term->name; } endif; ?></ul>
                           </div>
						
							<div class="text_description"><?php the_content(); ?></div>
                            <!--<div class="text_description"><?php the_excerpt(); ?></div>-->
                            
                            
                            <div class="contact_info col-md-6">
                              <p><strong>Contact Info:</strong></p>
                              <ul>
							  <?php 
							   if (get_field('telephone'))  {
							  echo '<li><span class="glyphicon glyphicon-phone-alt"></span> '. get_field('telephone'). '</li>'; 
							   }
							   
							   if (get_field('mobile'))  {
							  echo '<li><span class="glyphicon glyphicon-phone"></span> '. get_field('mobile'). '</li>'; 
							   }
							   if (get_field('email'))  { ?>
							  <li><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:<?php echo get_field('email'); ?>"><?php echo get_field('email'); ?></a></li> 
                              <?php
							   }
							   if (get_field('website'))  {
							  echo '<li><span class="glyphicon glyphicon-globe"></span> '. get_field('website'). '</li>'; 
							   }
							  ?>
                              </ul>
                            </div>
                            <div class="social_links col-md-6">
                              <p><strong>Get Social:</strong></p>
                              <div class="icons_social_media2">
                              <ul>
                              <?php 
							   if (get_field('facebook'))  { ?>
							    <li class="facebook"><a href="<?php echo get_field('facebook'); ?>" target="_blank" title="Facebook"><?php echo get_field('facebook'); ?></a> </li>
							   
                               <?php } ?>
                               <?php 
							   if (get_field('twitter'))  { ?>
							    <li class="twitter"><a href="<?php echo get_field('twitter'); ?>" target="_blank" title="Twitter"><?php echo get_field('facebook'); ?></a> </li>
							   
                               <?php } ?>
                               
                               <?php 
							   if (get_field('linkedin'))  { ?>
							    <li class="linkedin"><a href="<?php echo get_field('linkedin'); ?>" target="_blank" title="LinkedIn"><?php echo get_field('facebook'); ?></a> </li>
							   
                               <?php } ?>
                               
                               <?php 
							   if (get_field('pinterest'))  { ?>
							    <li class="pinterest"><a href="<?php echo get_field('pinterest'); ?>" target="_blank" title="Pinterest"><?php echo get_field('facebook'); ?></a> </li>
							   
                               <?php } ?>
                               <?php 
							   if (get_field('google+'))  { ?>
							    <li class="google"><a href="<?php echo get_field('google+'); ?>" target="_blank" title="Google+"><?php echo get_field('facebook'); ?></a> </li>
							   
                               <?php } ?>
                               <?php 
							   if (get_field('youtube'))  { ?>
							    <li class="youtube"><a href="<?php echo get_field('youtube'); ?>" target="_blank" title="Youtube"><?php echo get_field('facebook'); ?></a> </li>
							   
                               <?php } ?>
                               <?php 
							   if (get_field('vimeo'))  { ?>
							    <li class="vimeo"><a href="<?php echo get_field('vimeo'); ?>" target="_blank" title="Vimeo"><?php echo get_field('facebook'); ?></a> </li>
							   
                               <?php } ?>
                               
                              </ul>
                              </div>
                            </div>
                            
                            </div>
                    
                    
	
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
	
				</div>
	
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	
			</div>
			
			<?php comments_template(); ?>
	
		<?php endwhile; endif; ?>

			

			

		</div>
	

<div id="sidebar" class="col-md-3">
		<?php get_sidebar(); ?>

	</div>

</div>

</div>
<?php get_footer(); ?>