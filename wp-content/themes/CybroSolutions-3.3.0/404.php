<?php get_header(); ?>

<div id="page" class="container-fluid">

  <div class="formatted">
		<h1 style="color:#F00 !important;"><span class="glyphicon glyphicon-warning-sign"></span> <span><?php _e('Error 404', 'framework'); ?></span>. <?php _e('Page Not Found!', 'framework'); ?></h1>
		
        <div class="col-md-9 content">
	
		<div id="content-part">
			
			<h3><?php _e("Sorry, but we couldn't find the page you requested. It maybe temporarily unavailable, moved or taken off.", 'framework') ?></h3>		
			<h4><span class="glyphicon glyphicon-info-sign"></span> Please try the following to find what you are looking for:</h4>
            
              <p style="margin:5px 0 0 21px !important; line-height:28px !important;"><span class="glyphicon glyphicon-hand-right"></span> Enter a term or keyword in the search field at the right side bar.<br />
              <span class="glyphicon glyphicon-hand-right"></span> Use the site's top navigation bar or in the right side bar.<br />
              <span class="glyphicon glyphicon-hand-right"></span> Use your browser's back button to return to the previous page.</p>
              <p><img src="<?php echo bloginfo('url'); ?>/cybrosolutions/wp-content/uploads/2014/01/Page-Not-Found.jpg" /></p>
            
		</div>
        
        </div>
        
        <div id="sidebar" class="col-md-3">
		<?php get_sidebar(); ?>
	    </div>
        <div class="clear"></div>
        
	</div>

</div>

<?php get_footer(); ?>