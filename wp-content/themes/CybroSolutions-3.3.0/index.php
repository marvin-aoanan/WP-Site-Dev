<?php get_header(); ?>

  <div id="horizontal_ads_top" class="horizontal_ads container">
   <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Horizontal Ads Top')); ?>
  </div>
<div id="page" class="container-fluid">
<div class="formatted">
	
	<div class="col-md-9 col-sm-9 content">
    
    <?php if (is_category()) { ?>
			<h1><span class="glyphicon glyphicon-pushpin"></span> <span><?php printf(__("All posts in '%s'", 'framework'), single_cat_title('',false)); ?></span></h1>
		<?php } elseif( is_tag() ) { ?>
			<h1><span class="glyphicon glyphicon-pushpin"></span> <span><?php printf(__("All posts tagged '%s'", 'framework'), single_tag_title('',false)); ?></span></h1>
		<?php } elseif (is_day()) { ?>
			<h1><span class="glyphicon glyphicon-pushpin"></span> <span><?php _e('Archive for', 'framework') ?> <?php the_time('F jS, Y'); ?></span></h1>
		 <?php } elseif (is_month()) { ?>
			<h1><span class="glyphicon glyphicon-pushpin"></span> <span><?php _e('Archive for', 'framework') ?> <?php the_time('F, Y'); ?></span></h1>
		<?php } elseif (is_year()) { ?>
			<h1><span class="glyphicon glyphicon-pushpin"></span> <span><?php _e('Archive for', 'framework') ?> <?php the_time('Y'); ?></span></h1>
		<?php } elseif (is_author()) { ?>
			<h1><span class="glyphicon glyphicon-pushpin"></span> <span><?php _e('All posts by Author', 'framework') ?></span></h1>
		<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1><span class="glyphicon glyphicon-th-list"></span> <span><?php _e('Blog Archives', 'framework') ?></span></h1>
		<?php } else { ?>
			<h1><span class="glyphicon glyphicon-pencil"></span> <span><?php _e('Blog Posts', 'framework') ?></span> <?php echo get_post_meta( get_option('page_for_posts'), 'minti_subtitle', true ); ?></h1>
		<?php } ?>
    
    <div id="content-part">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix') ?>>
		  <div class="col-md-3 col-sm3">
			<div class="post-thumb">
				<?php if ( has_post_thumbnail()) { ?>
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-thumb'); ?></a>
				<?php } else { ?>
					<a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/framework/images/no-thumb.png" /></a>
				<?php } ?>
			</div>
          </div>  
		  <div class="col-md-9 col-sm-9">	
			<div class="post-entry">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	
				<div class="meta">
					<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <strong><?php the_date(); ?></strong> | <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp; <?php the_category(', ') ?> | <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php the_author_posts_link(); ?> 
				</div>
	
				<div class="entry">
					<?php the_excerpt(); ?>
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
		   <div class="col-md-9">
          	 <h1><span class="glyphicon glyphicon glyphicon-warning-sign"></span> <?php _e('Nothing found!!!', 'framework'); ?></h1>
           </div>
	 <?php endif; ?>

	</div>
	
	<div id="sidebar" class="col-md-3 col-sm-3">
		<?php get_sidebar(); ?>
	</div>

</div>
</div>

<?php get_footer(); ?>
