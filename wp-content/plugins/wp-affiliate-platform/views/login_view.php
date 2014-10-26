<?php
function wp_aff_login_view()
{
	$output = "";
	$output .= wp_aff_view_get_navbar();
	$output .= '<div id="wp_aff_inside">';
	$output .= wp_aff_show_login_page();
	$output .= '<div class="clear"></div></div>';
	$output .= wp_aff_view_get_footer();
	return $output;
}
function wp_aff_show_login_page()
{
	global $wpdb;
	$output = "";
	ob_start();
	?>

<script language="JavaScript" type="text/javascript" src="<?php echo WP_AFF_PLATFORM_URL.'/affiliates/js/jquery.validate.min.js'; ?>"></script>
<script type="text/javascript"> 
/* <![CDATA[ */
  jQuery(document).ready(function($){
    $("#logForm").validate();
  });
/*]]>*/  
</script>
 <div> 
    <h3 class="wp_aff_title"><?php echo AFF_LOGIN_PAGE_TITLE; ?></h3>

	  <?php // This code is to show error messages
      if (isset($_GET['msg'])) {
	  $msg = $wpdb->escape($_GET['msg']);
	  echo "<p class='error'>$msg</p>";
	  } ?>
      
      <!-- Start Login Form -->
      <form action="" method="post" name="logForm" id="logForm" >
		
        <table width="60%" border="0" cellpadding="4" cellspacing="4" class="loginform">
          
          <tr> 
            <td width="30%" align="right"><?php echo AFF_USERNAME; ?>: </td>
            <td width="65%" align="left"><input name="userid" type="text" class="required" id="txtbox" size="21"></td>
          </tr>
          <tr>
            <td align="right"><?php echo AFF_PASSWORD; ?>: </td>
            <td align="left"><input name="password" type="password" class="required password" id="txtbox" size="21"></td>
          </tr>
          <tr> 
            <td align="left">&nbsp;</td>
            <td align="left">
               <div>
                <input name="remember" type="checkbox" id="remember" value="1"> <label for="remember"><?php echo AFF_REMEMBER_ME; ?></label>
                </div>
               <div class="signup"> 
                  <input name="wpAffDoLogin" class="button medium light" type="submit" id="wpAffDoLogin" value="<?php echo AFF_LOGIN_BUTTON_LABEL; ?>">
                </div>
                
             </td>
          </tr>
          <tr> 
            <td colspan="2"> 
               <div style="text-align:center; padding:10px;"> 
                <a href="<?php echo wp_aff_view_get_url_with_separator("signup"); ?>"><?php echo AFF_AFFILIATE_SIGN_UP_LABEL; ?></a> | <a style="color:#ec7100;" href="<?php echo wp_aff_view_get_url_with_separator("forgot_pass"); ?>"><?php echo AFF_FORGOT_PASSWORD_LABEL .'?'; ?></a>
              </div></td>
          </tr>
        </table>

      </form>
      <!-- End Login Form -->  
</div>      
      
	<?php
	$output .= ob_get_contents();
	ob_end_clean();
	return $output;  
}
?>