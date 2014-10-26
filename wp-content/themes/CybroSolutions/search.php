<?php get_header(); ?>
<div class="line1"></div>
<div id="page" class="row">
<div class="container formatted">
		
	<?php if (have_posts()) : ?>
   	
    <h1><span class="glyphicon glyphicon-search"></span> <span><?php _e(" Search Results for '$s'", 'framework') ?></span></h1>
    
    <hr />
    
    <div class="col-md-9 content">

	<div id="content-part">
   	
	<?php while (have_posts()) : the_post(); ?>
        	
        	<div class="search-result">
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'framework'), get_the_title()); ?>"> <?php the_title(); ?></a></h2>
			
                <div class="info">
                    <span><?php the_author_posts_link(); ?></span>
                    <span><?php the_time( get_option('date_format') ); ?></span>
                    <span><?php the_category(', ') ?></span>
                    <span><?php comments_popup_link(__('No Comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></span>
                </div>

                <!--BEGIN .entry-content -->
                <div class="entry">
                    <?php the_excerpt(__('Continue Reading &rarr;', 'framework')); ?>
                <!--END .entry-content -->
                </div>
              
            </div>

		<?php endwhile; ?>
	

	<?php include (TEMPLATEPATH . '/framework/functions/nav.php' ); ?>
	
	</div>
	
    </div>
    
	<div id="sidebar" class="col-md-3">
		<?php get_sidebar(); ?>
	</div>

 

<?php else : ?>



   <h1><span class="error"><?php _e('No Results Found!', 'framework') ?></span></h1>
 
	<div class="col-md-9 content">
	 <div id="content-part">
	
			<div class="no-search-result">
				<p class="error"><?php _e("Sorry, no results found. Try different words to describe what you are looking for.", 'framework') ?></p>
			</div>
	
	</div>
    </div>
	
   <div id="sidebar" class="col-md-3">
   <?php get_sidebar(); ?>
   </div>



<?php endif; ?>

</div>
</div>

<?php get_footer(); ?>