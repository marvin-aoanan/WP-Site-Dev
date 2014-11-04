<?php get_header(); ?>
<div class="line1"></div>
<div id="page" class="row">
<div class="container formatted">

<h1><span class="glyphicon glyphicon-user"></span> <span>The Amazon.com</span></h1>

  <div class="col-md-9 content">
  
  
	<?php
	$args = array(
    'tax_query' => array(
        'taxonomy' => 'company',
        'field' => 'slug',
        'terms' => 'lazada-com-ph')
		);
      query_posts( $args );
	
      $args = array( 'post_type' => 'sponsors', 'posts_per_page' => 3 );
      $loop = new WP_Query( $args );
       while ( $loop->have_posts() ) : $loop->the_post();
          the_title();
       echo '<div class="entry-content">';
          the_excerpt();
       echo '</div>';
       endwhile;
    ?>
  </div>

  <div id="sidebar" class="col-md-3">
    <?php get_sidebar(); ?>
  </div>

</div>

</div>
<?php get_footer(); ?>