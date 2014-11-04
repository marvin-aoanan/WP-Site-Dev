<?php
/*
Template Name: Contact Custom Template
*/
?>

<?php get_header(); ?>
<div class="line1"></div>
<div id="page" class="row">
<div class="container formatted">
<h1><span class="glyphicon glyphicon-envelope"></span> <span><?php the_title(); ?></span> </h1>
<?php if (get_post_meta( get_the_ID(), 'minti_subtitle', true )) { ?>
      <h2><?php echo get_post_meta( get_the_ID(), 'minti_subtitle', true ); ?></h2>
    <?php } ?>
    
	<div class="col-md-9 content">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div id="post-<?php the_ID(); ?>" class="post">
	
				<div class="entry">
	
					<?php the_content(); ?>
	
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