<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
  			global $page, $paged;
  			wp_title('|', true, 'right');
  			bloginfo('name');
  			$site_description = get_bloginfo('description', 'display');
  			if ($site_description && (is_home() || is_front_page())) { echo " | $site_description"; }
  			if ( $paged >= 2 || $page >= 2 ) { echo ' | ' . sprintf('Page %s', max($paged, $page)); }
  			?>
	</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php if ( of_get_option('favicon_upload') != "" ) { ?>
		<link rel="shortcut icon" href="<?php echo of_get_option('favicon_upload'); ?>" />
	<?php } ?>
	
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/css/bootstrap-responsive.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/css/responsive.css" type="text/css" />
     
<!--[if IE 8]>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/css/IE8.css" type="text/css" />
<![endif]-->

<!--[if IE 9]>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/css/IE9.css" type="text/css" />
<![endif]-->
    
  
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
	
	<style>
	
	<?php 	
	/* -------------------------------------------------------- */
	/* Overwrite Default Colors with Custom Colors */
	/* -------------------------------------------------------- */
			$color = of_get_option('primary_colorpicker');
			$logo_margin = of_get_option('logo_margin');
			$header_height = of_get_option('header_height');
			$default_background = of_get_option('default_background');
			$customcss = of_get_option('css_code');
	?>

#logo{margin-top:<?php echo $logo_margin; ?>!important}

a:hover, .post-entry h2 a:hover{color:<?php echo $color; ?>}

#contactform #submit:hover{background-color:<?php echo $color; ?>}

::-moz-selection{background-color:<?php echo $color; ?>}
.::selection{background-color:<?php echo $color; ?>}

.color-hr{background:<?php echo $color; ?>}

#infobar{background:<?php echo $color; ?>}

#infobar .openbtn{background-color:<?php echo $color; ?>}

#infobar2{background-color:<?php echo $color; ?>}

#nav ul li a:hover{color:<?php echo $color; ?>; border-color:<?php echo $color; ?>}

#nav ul li.current-menu-item a, 
#nav ul li.current-page-ancestor a, 
#nav ul li.current-menu-ancestor a{border-color:<?php echo $color; ?>; background-color:<?php echo $color; ?>; color:<?php echo $color; ?>}

#nav ul li.current-menu-item ul li a:hover, 
#nav ul li.current-page-ancestor ul li a:hover, 
#nav ul li.current-menu-ancestor ul li a:hover{color:<?php echo $color; ?>!important}

#nav ul.sub-menu{border-color:<?php echo $color; ?>}

#latestposts .entry a.readmore{color:<?php echo $color; ?>}

#latestwork .entry:hover{border-color:<?php echo $color; ?>}
#latestwork .entry:hover h4 a{color:<?php echo $color; ?>}

#latestwork .entry:hover img{border-color:<?php echo $color; ?>}

a.work-carousel-prev:hover{background-color:<?php echo $color; ?>}

a.work-carousel-next:hover{background-color:<?php echo $color; ?>}

.post-thumb a:hover{border-color:<?php echo $color; ?>}

.big-post-thumb img{border-color:<?php echo $color; ?>}

.post-entry a.readmore{color:<?php echo $color; ?>}
.post-entry a.readmore:hover{background-color:<?php echo $color; ?>}

.meta a:hover{color:<?php echo $color; ?>}

.navigation a:hover{color:<?php echo $color; ?>}

a#cancel-comment-reply-link{color:<?php echo $color; ?>}

#commentform #submit:hover{background-color:<?php echo $color; ?>}
.posts-prev a:hover, .posts-next a:hover{background-color:<?php echo $color; ?>}

#filters li a:hover{color:<?php echo $color; ?>}

.work-item:hover{background-color:#fff; border-color:<?php echo $color; ?>}
.work-item:hover h3 a{color:<?php echo $color; ?>}

.work-item:hover img{border-color:<?php echo $color; ?>}

#sidebar .widget_nav_menu li.current-menu-item a{color:<?php echo $color; ?>!important}

#sidebar a:hover{color:<?php echo $color; ?>}

#breadcrumb a:hover{color:<?php echo $color; ?>}

#lasttweet{background-color:<?php echo $color; ?>}

.plan.featured{border-color:<?php echo $color; ?>}
.pricing-table .plan.featured:last-child{border-color:<?php echo $color; ?>}

.plan.featured h3{background-color:<?php echo $color; ?>}

.plan.featured .price{background-color:<?php echo $color; ?>}

.toggle .title:hover{color:<?php echo $color; ?>}
.toggle .title.active{color:<?php echo $color; ?>}

ul.tabNavigation li a.active{ color:<?php echo $color; ?>;  border-bottom:1px solid #fff;  border-top:1px solid <?php echo $color; ?>}

ul.tabNavigation li a:hover{color:<?php echo $color; ?>}

.button{ background-color:<?php echo $color; ?>}

#home-slider .flex-control-nav li a:hover{background:<?php echo $color; ?>}
#home-slider .flex-control-nav li a.active{background:<?php echo $color; ?>}

.accordion .title.active a{color:<?php echo $color; ?>!important}

#latestposts .entry a.readmore:hover{background-color:<?php echo $color; ?>}

.post-entry h2 a:hover, .search-result h2 a:hover, .work-detail-description a:hover{color:<?php echo $color; ?>}

<?php echo $customcss; ?>

@media only screen and (max-width: 767px) {
	#header1{
		border-top:0px solid <?php echo $color; ?>;
	}
}

	
	</style>
    
</head>

<body <?php body_class(); ?>>

	
	
	<div id="wrap" class="row">

		
		

		<div id="header" class="clearfix container">

			<div id="logo"><a href="<?php echo bloginfo('url'); ?>">
				<?php if ( of_get_option('logo_upload') ) { ?>
            		<img src="<?php echo of_get_option('logo_upload'); ?>" alt="<?php bloginfo('name'); ?>" />
            	<?php } else { ?>
            		<?php bloginfo('name'); ?>
            	<?php } ?>
			</a></div>
			
			<div id="slogan"><?php bloginfo('description'); ?></div>
            
            <div class="call_utility_top"><em><span class="calltxt">Call us today:</span></em> <span class="callnum">860.233.6233</span></div>
            <div class="affiliate"><a href="http://www.fergusonmcguire.com/index.html" target="_blank">An Affiliate of Ferguson &amp; McGuire, Inc.<span class="icon_arrow_white"></span></a></div>

			
			<div id="social" class="clearfix">
				<ul>
					<?php if ( of_get_option('twitter_url') ) { ?>
						<li class="twitter"><a href="http://twitter.com/<?php echo of_get_option('twitter_url'); ?>" target="_blank" title="Twitter">
							<?php _e('Twitter', 'framework'); ?>	
						</a></li>
					<?php } ?>
					<?php if ( of_get_option('linkedin_url') ) { ?>
						<li class="linkedin"><a href="<?php echo of_get_option('linkedin_url'); ?>" target="_blank" title="LinkedIn">
							<?php _e('LinkedIn', 'framework'); ?>
						</a></li>
					<?php } ?>
					<?php if ( of_get_option('dribbble_url') ) { ?>
						<li class="dribbble"><a href="<?php echo of_get_option('dribbble_url'); ?>" target="_blank" title="Houzz">
							<?php _e('Dribbble', 'framework'); ?>
						</a></li>
					<?php } ?>
					<?php if ( of_get_option('facebook_url') ) { ?>
						<li class="facebook"><a href="<?php echo of_get_option('facebook_url'); ?>" target="_blank" title="Facebook">
							<?php _e('Facebook', 'framework'); ?>
						</a></li>
					<?php } ?>
					<?php if ( of_get_option('youtube_url') ) { ?>
						<li class="youtube"><a href="<?php echo of_get_option('youtube_url'); ?>" target="_blank" title="YouTube">
							<?php _e('YouTube', 'framework'); ?>
						</a></li>
					<?php } ?>
					
					<?php if ( of_get_option('flickr_url') ) { ?>
						<li class="flickr"><a href="<?php echo of_get_option('flickr_url'); ?>" target="_blank" title="Flickr">
							<?php _e('Flickr', 'framework'); ?>
						</a></li>
					<?php } ?>
					<?php if ( of_get_option('google_url') ) { ?>
						<li class="google"><a href="<?php echo of_get_option('google_url'); ?>" target="_blank" title="Google">
							<?php _e('Google+', 'framework'); ?>
						</a></li>
					<?php } ?>
					
					<?php if ( of_get_option('vimeo_url') ) { ?>
						<li class="vimeo"><a href="<?php echo of_get_option('vimeo_url'); ?>" target="_blank" title="Vimeo">
							<?php _e('Vimeo', 'framework'); ?>
						</a></li>
					<?php } ?>
					
					<?php if ( of_get_option('pinterest_url') ) { ?>
						<li class="pinterest"><a href="<?php echo of_get_option('pinterest_url'); ?>" target="_blank" title="Pinterest">
							<?php _e('Pinterest', 'framework'); ?>
						</a></li>
					<?php } ?>
				</ul>
			</div>
			
		</div>
		
        <div class="container navigation">
        <div class="nav_L"></div>
		<div class="clearfix main_nav">
			<div class="top_menu"><?php wp_nav_menu(array('menu' => 'custom_menu')); ?></div>
            <div class="clear"></div> 
           
             <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="brand">Menu</span>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <?php wp_nav_menu(array('menu' => 'custom_menu')); ?>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
           
		</div>
        <div class="nav_R"></div>
        <div class="clear"></div>
        </div>

 
  
