<?php
/*
Template Name: Sponsors
*/
?>
<?php get_header(); ?>
<div class="line1"></div>

<div id="page" class="row">
<div class="container formatted">
<h1><span class="glyphicon glyphicon-thumbs-up"></span> <span><?php the_title(); ?></span> </h1>
<?php if (get_post_meta( get_the_ID(), 'minti_subtitle', true )) { ?>
      <h2><?php echo get_post_meta( get_the_ID(), 'minti_subtitle', true ); ?></h2>
    <?php } ?>

   <div id="sponsors" class="content">
    
	<?php
    //for a given post type, return all
    $post_type = 'sponsors';
    $tax = 'company';
    $tax_terms = get_terms($tax);
    if ($tax_terms) {
    foreach ($tax_terms  as $tax_term) {
    $args=array(
    'post_type' => $post_type,
    "$tax" => $tax_term->slug,
    //'post_status' => 'publish',
    'posts_per_page' => -1,
    //'caller_get_posts'=> 1,
	'orderby' => 'menu_order', 'order' => ASC
    );
    
    $my_query = null;
    $my_query = new WP_Query($args);
    
	if( $my_query->have_posts() ) {
      echo '<div class="sponsor_category"><strong>Best products we recommend from <a target="_blank" href="' .$tax_term->description.'">' .$tax_term->name. '</a>, Shop Now!</strong></div>
	   <div class="shadow_top"></div>';
   
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
    
     <div class="col-md-4">
      <div class="our_sponsors">
         
		 <?php if ( get_field('sponsor_image') ) {  ?> 
            <div class="sponsor_image"><img src="<?php echo get_field('sponsor_image') ?>" /></div>
         <?php } ?>
         
         <?php if ( get_field('sponsor_html_code') ) { ?>
           <div class="sponsor_short_desc"><?php echo get_field('sponsor_html_code') ?></div>
         <?php } ?>
         
         <?php if( get_field('sponsor_link') ) { ?>
       <div class="sponsor_permalink"><p><a target="_blank" href="<?php echo get_field('sponsor_link') ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p></div>  
         <?php } ?> 
         
      </div><!--//end our_sponsors-->
      
     </div> <!--//end col-md-4-->
    
	<?php
    endwhile;
    }
    //wp_reset_query();
    }
    }
    ?>

    
    </div>
	
  

</div>

</div>

<?php get_footer(); ?>