<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		
<?php if ( of_get_option('favicon_upload') != "" ) { ?>
<link rel="shortcut icon" href="<?php echo of_get_option('favicon_upload'); ?>" />
<?php } ?>

<!-- Bootstrap 3.0 core CSS -->
<!--<link href="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/dist/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/dist/css/bootstrap-theme.min.css" rel="stylesheet">-->

<!-- Bootstrap 3.3.0 core CSS-->
<link href="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.3.0/dist/css/bootstrap-theme.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
   

<!-- Bootstrap 2.xx-->
<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/css/bootstrap2.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/css/bootstrap-responsive.css" type="text/css" />-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

<!--Custom Responsive CSS & Google Fonts-->
<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/css/responsive.css" type="text/css" />-->
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300' rel='stylesheet' type='text/css'>-->

<!--lytebox css-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/js/lib/thumbs.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/js/lib/lytebox/lytebox.css" type="text/css" />

<!--[if IE 8]>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/css/IE8.css" type="text/css" />
<![endif]-->

<!--[if IE 9]>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/framework/css/IE9.css" type="text/css" />
<![endif]-->


<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--<link href="<?php //bloginfo('stylesheet_directory'); ?>/framework/jquery-bar-rating/examples/css/examples.css" rel="stylesheet" type="text/css"/>-->

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

/*#logo{margin-top:<?php echo $logo_margin; ?>!important}*/

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
<div style="display:none;">
<?php global $current_user;
get_currentuserinfo();
if ($current_user->user_login)
echo 'Username: ' . $current_user->user_login . "\n";
echo 'User email: ' . $current_user->user_email . "\n";
echo 'User first name: ' . $current_user->user_firstname . "\n";
echo 'User last name: ' . $current_user->user_lastname . "\n";
echo 'User display name: ' . $current_user->display_name . "\n";
echo 'User ID: ' . $current_user->ID . "\n";

$user_login = $current_user->user_login;
$user_login = ucfirst($user_login); // Caiptalize username
?>
</div>

<div id="wrap" class="container-fluid">
            
	<?php if ( of_get_option('infobar_checkbox') == true ) { ?>
    <div id="infobar"<?php if ( of_get_option('infobar_visible') == true ) { echo ' class="showit"'; } ?>>
    <?php echo of_get_option('infobar_text'); ?>
    <div class="openbtn cursor">Open</div>
    <div class="closebtn">X</div>
    </div>
    <?php } else { ?>
    <!--<div id="infobar2"></div>-->
    <?php } ?>

<div class="row">

<div class="col-md-12 col-sm-12">
<?php if ( is_user_logged_in() ) { ?>
            
    <div id="user_menu">
    
     <div class="btn-group pull-right" style="margin-left:30px;">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tasks"></span> Get a Project <b class="caret"></b></a>
    <ul class="dropdown-menu" role="menu">
    <li><a href="http://cybrosolutions.net/?post_type=product"><span class="glyphicon glyphicon-th-large"></span> Products &amp; Services</a></li>
    <li><a href="http://cybrosolutions.net/my-project-order"><span class="glyphicon glyphicon-shopping-cart"></span> My Project Cart</a></li>
    <li><a href="http://cybrosolutions.net/checkout/pay"><span class="glyphicon glyphicon-transfer"></span> Checkout → Pay</a></li>
    <li class="divider"></li>
    <li><a href="http://cybrosolutions.net/my-account/view-order"><span class="glyphicon glyphicon-eye-open"></span> My Active Project</a></li>
    <li class="divider"></li>
    <li><a href="http://cybrosolutions.net/affiliates"><span class="glyphicon glyphicon-stats"></span> Affiliates</a></li>
    
    </ul>
    
    </div>
    
     <div class="btn-group pull-right">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Welcome <span class="user_login"><?php echo $user_login; ?></span> <b class="caret"></b></a>
    
    <ul class="dropdown-menu" role="menu">
    <li><a href="http://cybrosolutions.net/my-account"><span class="glyphicon glyphicon-cog"></span> My Account</a></li>
    <li><a href="http://cybrosolutions.net/my-account/change-password"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
    <li><a href="http://cybrosolutions.net/my-account/edit-address?address=billing"><span class="glyphicon glyphicon-edit"></span> Edit my Address</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo wp_logout_url(); ?>" title="Logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
    </ul>
   </div>
    
    </div>
			
<?php } else { ?>
    <div id="user_menu2">
         
        
        <div class="btn-group pull-right" style="margin-left:30px">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-save"></span> Register <b class="caret"></b></a>
          <ul class="dropdown-menu">
             <li><a href="http://cybrosolutions.net/cybrosolutions/wp-login.php?action=register"><span class="glyphicon glyphicon-new-window"></span> New Account</a></li>
            <li><a href="http://cybrosolutions.net/affiliates"><span class="glyphicon glyphicon-stats"></span> Affiliates</a></li>
          </ul>
        </div>
          
        <div class="btn-group pull-right">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Hi Visitor! <b class="caret"></b></a>
          <ul class="dropdown-menu">
            
            <li><a href="http://cybrosolutions.net/cybrosolutions/wp-login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="http://cybrosolutions.net/cybrosolutions/wp-login.php?action=lostpassword"><span class="glyphicon glyphicon-exclamation-sign"></span> Lost Password?</a></li>
            
          </ul>
        </div>
        
     
    </div><!-- #user_menu2-->
            
<?php } ?>
</div>

<div id="header">

<div class="col-md-4 col-sm-4">

    <div id="logo"><a href="<?php echo bloginfo('url'); ?>">
    <?php if ( of_get_option('logo_upload') ) { ?>
    <img src="<?php echo of_get_option('logo_upload'); ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" />
    <?php } else { ?>
    <?php bloginfo('name'); ?>
    <?php } ?>
    </a></div>
    
    <div id="slogan"><?php bloginfo('description'); ?></div>
    
    <?php if ( of_get_option('contact_number') ) { ?>
    <div class="contact_num">Call Us: <span><?php echo of_get_option('contact_number'); ?></span></div>
    <?php } ?>
    
</div> <!-- /.col-md-4-->      

<div class="col-md-8 col-sm-8">
 
<div class="main_nav">
    <?php wp_nav_menu(array('menu' => 'custom_menu')); ?> 
</div>                 

<nav class="navbar navbar-default" role="navigation" id="mobile_nav">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php wp_nav_menu(array('menu' => 'custom_menu')); ?>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div><!-- /.col-md-8--> 

</div><!--end #header-->

</div><!-- /.row-->



<div class="navigation" style="display:none;">
    
    <div class="main_nav">
    <div class="top_menu"><?php wp_nav_menu(array('menu' => 'custom_menu')); ?></div>    
    
     <div id="mobile_nav">
    
    
    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" data-toggle="collapse" data-target="#navbar-collapse-1" href="javascript:void()"><span class="glyphicon glyphicon-globe"></span> Site Menu</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <?php wp_nav_menu(array('menu' => 'custom_menu')); ?>      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    
    </div><!--/#mobile_nav -->

    
    </div><!--/.main_nav -->
    
   
    
    
    </div><!-- /.naigation-->