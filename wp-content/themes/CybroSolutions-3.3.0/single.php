<?php get_header(); ?>
<div class="line1"></div>
  <div id="horizontal_ads_top" class="horizontal_ads container">
   <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Horizontal Ads Top')); ?>
  </div>

<div id="page" class="row">
  <div class="container formatted">

	<div class="col-md-8 content">

	   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		  <div <?php post_class('single-post') ?> id="post-<?php the_ID(); ?>">
          
          <h1><span class="glyphicon glyphicon-pencil"></span> <span><?php the_title(); ?></span></h1>
    <?php if (get_post_meta( get_the_ID(), 'minti_subtitle', true )) { ?>
      <h2><?php echo get_post_meta( get_the_ID(), 'minti_subtitle', true ); ?></h2>
    <?php } ?>
			
			<div class="meta">
					<?php _e('Posted on:', 'framework'); ?> <strong><?php the_date(); ?></strong> | <?php _e('Posted in:', 'framework'); ?> <?php the_category(', ')  ?> <!--| <?php _e('By:', 'framework'); ?> <?php the_author_posts_link(); ?>-->
			</div>
            
            <!--<?php if ( has_post_thumbnail()) { ?>
				<div class="big-post-thumb"> <?php the_post_thumbnail('single-thumb'); ?> </div>    
	        <?php } ?>-->
			
			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>
			
			<div class="meta-tags">
				<?php the_tags( '', '', ''); ?>
			</div>
           
			
		</div>
        

	<div class="col-md-11">
	<hr />
    
	<?php comments_template(); ?></div>

	<?php endwhile; endif; ?>
	
	</div>
	
	<div id="sidebar" class="col-md-4">
		<?php get_sidebar(); ?>
        

	</div>
 
   </div>

</div>

<?php get_footer(); ?>