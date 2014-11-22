<div id="footer">

<div id="footer_ads">
	<div class="col-md-12 col-sm-12"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Ads')); ?> </div>    
</div>

<div id="breadcrumb">
   <div class="breadcrumb_link"><?php the_breadcrumb(); ?></div>
</div>

<div id="footer_wrap">		
  
<div id="footer-widgets">    
   
       <div class="col-md-3 col-sm-3">
        <div id="footerlogo">
        <?php if ( of_get_option('footerlogo_upload') ) { ?>
        <div class="footer_logo_img"><a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php echo of_get_option('footerlogo_upload'); ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
        <?php } else { ?>
        <h4><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h4>
        <?php } ?>
        <!--<div class="footer-text"><?php echo of_get_option('footer_text'); ?></div>-->
        <div class="slogan"><?php bloginfo('description'); ?></div>
        <hr class="hr3" />
        
        <div id="social_media_footer" class="icons_social_media">
        <h2>Follow Us</h2>
        <ul>
        <!--<li class="follow_us">Follow Us on</li>-->
        
        <?php if ( of_get_option('facebook_url') ) { ?>
        <li class="facebook"><a href="<?php echo of_get_option('facebook_url'); ?>" target="_blank" title="Facebook">
        <?php _e('Facebook', 'framework'); ?>
        </a></li>
        <?php } ?>
        <?php if ( of_get_option('twitter_url') ) { ?>
        <li class="twitter"><a href="https://twitter.com/<?php echo of_get_option('twitter_url'); ?>" target="_blank" title="Twitter">
        <?php _e('Twitter', 'framework'); ?>	
        </a></li>
        <?php } ?>
        
        <?php if ( of_get_option('linkedin_url') ) { ?>
        <li class="linkedin"><a href="<?php echo of_get_option('linkedin_url'); ?>" target="_blank" title="LinkedIn">
        <?php _e('LinkedIn', 'framework'); ?>
        </a></li>
        <?php } ?>
        
        <?php if ( of_get_option('houzz3_url') ) { ?>
        <li class="houzz3"><a href="<?php echo of_get_option('houzz3_url'); ?>" target="_blank" title="Houzz3">
        <?php _e('Houzz3', 'framework'); ?>
        </a></li>
        <?php } ?>
        
        <?php if ( of_get_option('dribbble_url') ) { ?>
        <li class="dribbble"><a href="<?php echo of_get_option('dribbble_url'); ?>" target="_blank" title="Dribble">
        <?php _e('Dribbble', 'framework'); ?>
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
        <div class="clear"></div>
        </div>
       </div> 
        
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets')); ?>
        
        <div class="clear"></div>
</div>
<!-- end #footer-widgets div-->
	
</div>
<!-- end #footer_wrap div-->

<div id="copyright">
    
    <div class="col-md-7 col-sm-7">
    <p class="copyright_info">&copy; Copyright <?php echo date("Y"); ?> <span class="bloginfo_name"><?php echo " "; bloginfo('name'); ?></span>. All Rights Reserved.</p>
    <div class="copyright-text"><?php echo of_get_option('copyright_text'); ?></div>
    <div class="footer-text-links"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Text / Links')); ?></div>
    </div>
    
    <div class="col-md-5 col-sm-5">
    
    <div class="footer-search"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Search')); ?></div>
    
    <div id="payments">
    <?php if ( of_get_option('paypal_logo_upload') ) { ?>
    <div>
    <p><small><strong>WE ACCEPT:</strong></small></p>
    <div class="payment_method"><img src="<?php echo of_get_option('paypal_logo_upload'); ?>" title="Secure Payment via Paypal" alt="Secure Payment via Paypal" /></div>
    <?php } ?>
    <?php if ( of_get_option('cc_logo_upload') ) { ?>
    <div class="payment_method"><img src="<?php echo of_get_option('cc_logo_upload'); ?>" title="Pay via Credit Card" alt="Pay via Credit Card" /></div>
    <?php } ?>
    <?php if ( of_get_option('bank_logo_upload') ) { ?>
    <div class="payment_method"><img src="<?php echo of_get_option('bank_logo_upload'); ?>" title="Pay via Bank Deposit" alt="Pay via Bank Deposit" /></div>
    <?php } ?>
    <?php if ( of_get_option('bank_logo_upload2') ) { ?>
    <div class="payment_method"><img src="<?php echo of_get_option('bank_logo_upload2'); ?>" title="Pay via Bank Deposit" alt="Pay via Bank Deposit" /></div>
    <?php } ?>
    </div>
    
    </div><!-- end #payments div--> 
    
    </div>

    <div id="back-to-top">
    	<a href="#wrap"><img src="<?php bloginfo('template_url'); ?>/framework/images/top.png" alt="back to top" title="back to top" width="18" height="16" /></a>
    </div>
    <div class="clear"></div>
</div>
<!-- end #copyright div-->

</div> <!-- end #footer-->	
    
</div><!-- .end #wrap div-->
	
<?php wp_footer(); ?>    
    
<?php if ( of_get_option('analytics_code') != "" ) { 
echo of_get_option('analytics_code');
} ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<!--<script src="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/assets/js/jquery.js"></script>-->
<script src="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/dist/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/assets/js/holder.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/assets/js/docs.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/dist/js/bootstrap3.0-application.js"></script>

<script>
var bootstrapButton = $.fn.button.noConflict() // return $.fn.button to previously assigned value
$.fn.bootstrapBtn = bootstrapButton            // give $().bootstrapBtn the Bootstrap functionality
</script>
</body>

</html>
