<?php
function wp_aff_contact_view()
{
	$output = "";
	$output .= wp_aff_view_get_navbar();
	$output .= '<div id="wp_aff_inside">';
	$output .= wp_aff_show_contact_form();
	$output .= '<div class="clear"></div></div>';
	$output .= wp_aff_view_get_footer();
	return $output;
}

function wp_aff_show_contact_form()
{
	$output = "";
	if (isset($_POST['send_msg']))
	{
	    $subj = AFF_C_MSG_FROM_AFFILIATE;
	    $affiliate_details = "Affiliate ID: ".$_SESSION['user_id']."\n".AFF_C_AFFILIATE_NAME.$_POST['aff_name']."\n".AFF_C_AFFILIATE_EMAIL.$_POST['aff_email'];
	    $body = "\n-------------------\n".$affiliate_details.
				"\n-------------------\n\n".$_POST['aff_msg'];
	            
	
	    $admin_email = get_option('wp_aff_contact_email');
	    $headers = 'From: '.$_POST['aff_email'] . "\r\n";
	
	    wp_mail($admin_email, $subj, $body, $headers);
	    wp_affiliate_log_debug("Email sent to (".$admin_email.") with the message submitted in the affiliate contact form.",true);
	    $output .= "<br /><strong>".AFF_C_MSG_SENT."</strong><br /><br />";
	}

	//$output .= '<img src="'.WP_AFF_PLATFORM_URL.'/affiliates/images/contact.png" alt="Contact Icon" />';
	
	global $wpdb;
	$affiliates_table_name = WP_AFF_AFFILIATES_TBL_NAME;
	$editingaff = $wpdb->get_row("SELECT * FROM $affiliates_table_name WHERE refid = '".$_SESSION['user_id']."'", OBJECT);
	ob_start();
	?>
    <div id="aff_contact_form">
	<form id="wp_aff_contact" class="form-horizontal" role="form" action="" method="post">
	<input type="hidden" name="send_msg" id="send_msg" value="true" />
		<fieldset>
			<legend><?php echo AFF_C_USE_THE_FORM_BELOW; ?></legend>
			       <div class="form-group"> 
					<div><label class="col-sm-4 control-label"><?php echo AFF_C_NAME; ?></label></div>
                     <div class="col-sm-6">
					<input class="user-edit" id="wp_aff_txtbox" name="aff_name" type="text" value="<?php echo $editingaff->firstname; ?>">
                    </div> 
				   </div>
                   
                   <div class="form-group">  
					<div><label class="col-sm-4 control-label"><?php echo AFF_C_EMAIL; ?></label></div>
                    <div class="col-sm-6">
					<input class="user-edit" id="wp_aff_txtbox" name="aff_email" type="email" value="<?php echo $editingaff->email; ?>">
                    </div>
                   </div> 
				
                   <div class="form-group"> 
					<div><label class="col-sm-4 control-label"><?php echo AFF_C_MSG; ?></label></div>
                    <div class="col-sm-6">
					<textarea id="aff_msg" name="aff_msg" rows="5" required="required"></textarea>
                    </div>
				  </div> 
                
		</fieldset>
		<fieldset>
			<div class="form-group">
             <div><label class="col-sm-4 control-label"><?php //echo AFF_C_MSG; ?></label></div>
             <div class="col-md-6">
			  <input class="button light" type="submit" name="sendMsg" value="<?php echo AFF_C_SEND_MSG_BUTTON; ?>">
             </div> 
            </div>
		</fieldset>
	</form>
    </div>
	<?php 
	$output .= ob_get_contents();
	ob_end_clean(); 
	return $output;
}
