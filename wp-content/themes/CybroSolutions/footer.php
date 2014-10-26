<div id="footer_ads" class="clearfix container">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Ads')); ?>     
</div>

<div id="footer_wrap">		
    
    <div id="breadcrumb">
       <div class="container"><?php the_breadcrumb(); ?></div>
    </div>
    
    <?php if ( of_get_option('twitterfooter_checkbox') == true ) { ?>
    <?php if ( of_get_option('twitter_url') ) { ?>
    <div id="lasttweet">
      <div class="container">
       <div id="tweetstatus"></div>
      </div>
    </div>
    <?php } else { ?>
    <div class="color-hr"></div>
    <?php } ?>
    <?php } else { ?>
    <div class="color-hr"></div>
    <?php } ?>
		
		
<div id="footer" class="clearfix">
        
    <div class="container">
       <div class="col-sm-3">
        <div id="footerlogo">
        <?php if ( of_get_option('footerlogo_upload') ) { ?>
        <div class="footer_logo_img"><a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php echo of_get_option('footerlogo_upload'); ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
        <?php } else { ?>
        <h4><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h4>
        <?php } ?>
        <div class="description"><?php echo of_get_option('footer_text'); ?></div>
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
        </div>
       </div> 
        
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets')); ?>
        
        <div class="clear"></div>
        
    </div>	
    
    
             
</div><!-- end #footer div-->
        
    <div id="copyright">
    
    <div class="container">
     
     <div class="col-md-8">
      <p>&copy; Copyright <?php echo date("Y"); ?> <span class="bloginfo_name"><?php echo " "; bloginfo('name'); ?></span>. All Rights Reserved.</p>
      <p><em>Website Design &amp; Development agency in Manila, Philippines</em></p>
      <div class="spacer10"></div>
	  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Text / Links')); ?>
      </div>
      
      <div class="col-md-4">
      
      <div id="payments">
     
        <?php if ( of_get_option('paypal_logo_upload') ) { ?>
        <div class="col-sm-3">
        <p style="text-align:right"><small><strong>WE ACCEPT:</strong></small></p>
        </div>
        <div class="col-sm-9">
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
      
    </div>
    
    <div id="back-to-top">
    <a href="#wrap"><img src="<?php bloginfo('template_url'); ?>/framework/images/top.png" alt="top" width="18" height="16" /></a>
    </div>
    </div><!-- end #copyright div-->
		
</div>

</div>
	
<?php wp_footer(); ?>    
    
<?php if ( of_get_option('analytics_code') != "" ) { 
echo of_get_option('analytics_code');
} ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!--<script src="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/assets/js/jquery.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/dist/js/bootstrap.min.js"></script>-->
<script src="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/assets/js/holder.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/assets/js/docs.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/framework/bootstrap-3.0/dist/js/bootstrap3.0-application.js"></script>


</body>

</html>
