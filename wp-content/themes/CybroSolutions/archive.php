<?php get_header(); ?>
<div class="line1"></div>
  <div id="horizontal_ads_top" class="horizontal_ads container">
   <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Horizontal Ads Top')); ?>
  </div>

<?php if (have_posts()) : ?>
		
<div id="page" class="row">
   <div class="container formatted">
     
     <div class="col-md-8 content">
     
     <h1><span class="glyphicon glyphicon glyphicon-file"></span><span>
 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				
			<?php //_e('Category', 'framework'); ?> <?php single_cat_title(); ?> <?php //_e('Category', 'framework'); ?>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<?php _e('Posts Tagged', 'framework'); ?> '<?php single_tag_title(); ?>'

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<?php _e('Archive for', 'framework'); ?> <?php the_time('F jS, Y'); ?>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<?php _e('Archive for', 'framework'); ?> <?php the_time('F, Y'); ?>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<?php _e('Archive for', 'framework'); ?> <?php the_time('Y'); ?>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<?php _e('Author\'s Archive', 'framework'); ?>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<?php _e('Blog Archives', 'framework'); ?>
			
			<?php } ?>
			</span></h1>
		
		<div id="content-part">

			<?php while (have_posts()) : the_post(); ?>
			
		    <div id="post-<?php the_ID(); ?>" <?php post_class('clearfix') ?>>
		     <div class="col-md-3">
			    <div class="post-thumb">
				<?php if ( has_post_thumbnail()) { ?>
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-thumb'); ?></a>
				<?php } else { ?>
					<a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/framework/images/no-thumb.png" /></a>
				<?php } ?>
			</div>
             </div>
			 <div class="col-md-9">
			   <div class="post-entry">
				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
	
				<div class="meta">
					<?php _e('Posted on:', 'framework'); ?> <strong><?php the_date(); ?></strong> | <?php _e('Posted in:', 'framework'); ?> <?php the_category(', ') ?> <!--| <?php _e('By:', 'framework'); ?> <?php the_author_posts_link(); ?>-->
				</div>
	
				<div class="entry">
					<?php the_excerpt(); ?>
                    <!--<a class="btn" href="<?php echo get_permalink(); ?>"> Read More <span class="arrow_btn_right">&#8250;</span></a>-->
				</div>
                

			</div>
            </div>
            <div class="clear"></div>
            <hr class="hr3" />

		</div>

			<?php endwhile; ?>

			<div class="col-md-11"><?php include (TEMPLATEPATH . '/framework/functions/nav.php' ); ?></div>
			
		</div>		
			
	     <?php else : ?>
		   <h1><span class="glyphicon glyphicon glyphicon-warning-sign"></span> <?php _e('Nothing found', 'framework'); ?></h1>
	     <?php endif; ?>
         
        </div> 
	
        <div id="sidebar" class="col-md-4">
		  <?php get_sidebar(); ?>
	    </div>


    </div>
</div>


<?php get_footer(); ?>
