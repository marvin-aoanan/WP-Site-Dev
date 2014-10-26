<?php
function wp_aff_details_view()
{
	$output = "";
	$output .= wp_aff_view_get_navbar();
	$output .= '<div id="wp_aff_inside">';		
	$output .= wp_aff_show_edit_details();
	$output .= '</div>';
	$output .= wp_aff_view_get_footer();	
	return $output;
}

function wp_aff_show_edit_details()
{
	include_once('countries.php');
	$output = "";
	
	global $wpdb;
	$affiliates_table_name = WP_AFF_AFFILIATES_TBL_NAME;
	$wp_aff_platform_config = WP_Affiliate_Platform_Config::getInstance();
	$errorMsg = '';
	  
	if(isset($_POST['commited']) && $_POST['commited'] == 'yes')
	{
		if(!isset($_SESSION['user_id'])){//Check if user is logged in
			die("User is not logged in as an affiliate. Profile update request denied.");
		}
		//Field validation
	    if($_POST['clientemail'] == ''){$errorMsg .= AFF_REQUIRED.": ".AFF_EMAIL.'<br>';}
	    if($wp_aff_platform_config->getValue('wp_aff_make_paypal_email_required')=='1'){
	    	if($_POST['clientpaypalemail'] == ''){$errorMsg .= AFF_REQUIRED.": ".AFF_PAYPAL_EMAIL.'<br>';}
	    }
	    
	    if($errorMsg == '')
	    {       
	    	if(!empty($_POST['password'])){
		    	$password = $_POST['password'];
				include_once(ABSPATH.WPINC.'/class-phpass.php');
				$wp_hasher = new PasswordHash(8, TRUE);
				$password = $wp_hasher->HashPassword($password);
	    	}
	    	else{
	    		$password = $_POST['encrypted-pass'];
	    	}	
			$payableto = "";//$_POST['clientpayableto']    	
	        $updatedb = "UPDATE $affiliates_table_name SET pass = '".$password."', company = '".$_POST['clientcompany']."', payableto = '".$payableto."', title = '".$_POST['clienttitle']."', firstname = '".$_POST['clientfirstname']."', lastname = '".$_POST['clientlastname']."', email = '".$_POST['clientemail']."', street = '".$_POST['clientstreet']."', town = '".$_POST['clienttown']."', state = '".$_POST['clientstate']."', country = '".$_POST['clientcountry']."', postcode = '".$_POST['clientpostcode']."', website = '".$_POST['webpage']."', phone = '".$_POST['clientphone']."', fax = '".$_POST['clientfax']."', paypalemail = '".$_POST['clientpaypalemail']."', tax_id = '".$_POST['tax_id']."', account_details = '".$_POST['account_details']."' WHERE refid = '".$_SESSION['user_id']."'";
	        $results = $wpdb->query($updatedb);
			
	        do_action('wp_aff_profile_update',$_SESSION['user_id'],$_POST);
	        
	        $output .= "<div class='wp_aff_success'>".AFF_D_CHANGED."</div>";
	    }
	}
	
	$editingaff = $wpdb->get_row("SELECT * FROM $affiliates_table_name WHERE refid = '".$_SESSION['user_id']."'", OBJECT);
	
	if($errorMsg != '')
	     $output .= "<p class='error'>$errorMsg</p>";
	
	if ($editingaff)
	{
		ob_start();
		?>	
		
	      <form id="aff_details_edit_form" class="form-horizontal" role="form" action="" method="post" ENCTYPE=multipart/form-data>
	        <div id="update_user">
            
              <div class="form-group">
	             <label class="col-sm-3 control-label"><?php echo AFF_AFFILIATE_ID; ?>:</label>
                  <div class="form-control-static"><?php echo $_SESSION['user_id']; ?></div>
	          </div> 
              
	          
              <div class="form-group">
	            
	            <div><label class="col-sm-3 control-label"><?php echo AFF_PASSWORD; ?>:</label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=password name=password value="">
	            <input name="encrypted-pass" type="hidden" value="<?php echo $editingaff->pass; ?>" size="20" /> 
                <div><span style="font-size:12px;"><?php echo AFF_LEAVE_EMPTY_TO_KEEP_PASSWORD; ?></span></div>   
                </div>        	            
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_COMPANY; ?>:</label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=clientcompany value="<?php echo $editingaff->company; ?>">
                </div>
	          </div>
              
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_TITLE; ?>:</label></div>
                <div class="col-sm-5">
	                <select class="user-select" name=clienttitle>
	                  <option value=Mr <?php if($editingaff->title=="Mr")echo 'selected="selected"';?>><?php echo AFF_MR; ?></option>
	                  <option value=Mrs <?php if($editingaff->title=="Mrs")echo 'selected="selected"';?>><?php echo AFF_MRS; ?></option>
	                  <option value=Miss <?php if($editingaff->title=="Miss")echo 'selected="selected"';?>><?php echo AFF_MISS; ?></option>
	                  <option value=Ms <?php if($editingaff->title=="Ms")echo 'selected="selected"';?>><?php echo AFF_MS; ?></option>
	                  <option value=Dr <?php if($editingaff->title=="Dr")echo 'selected="selected"';?>><?php echo AFF_DR; ?></option>
	                </select>
                 </div>   
              </div>      
                    
	          <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_FIRST_NAME; ?>:</label></div>
                <div class="col-sm-5">
	                <input class="user-edit" type=text name=clientfirstname value="<?php echo $editingaff->firstname; ?>">
                </div>
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_LAST_NAME; ?>:</label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=clientlastname value="<?php echo $editingaff->lastname; ?>">
                </div>
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_EMAIL; ?>: </label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=clientemail value="<?php echo $editingaff->email; ?>">
                </div>
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_ADDRESS; ?>:</label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=clientstreet value="<?php echo $editingaff->street; ?>">
                </div>
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_TOWN; ?>:</label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=clienttown value="<?php echo $editingaff->town; ?>">
                </div>
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_STATE; ?>:</label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=clientstate value="<?php echo $editingaff->state; ?>">
                </div>
              </div>  
	          
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_COUNTRY; ?>: </label></div>
                <div class="col-sm-5">
	            <select class="user-select" name=clientcountry class=dropdown>
	                <?php foreach($GLOBALS['countries'] as $key => $country)
	                    print '<option value="'.$key.'" '.($editingaff->country == $key ? 'selected' : '').'>'.$country.'</option>'."\n";
	                ?>
	            </select>
                </div>
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_ZIP; ?>: </label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=clientpostcode value="<?php echo $editingaff->postcode; ?>">
                </div>
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_WEBSITE; ?>: </label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=webpage value="<?php echo $editingaff->website; ?>">
                </div>
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_PHONE; ?>: </label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=clientphone value="<?php echo $editingaff->phone; ?>">
                </div>
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_FAX; ?>: </label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=clientfax value="<?php echo $editingaff->fax; ?>">
                </div>
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_PAYPAL_EMAIL; ?>: </label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=clientpaypalemail value="<?php echo $editingaff->paypalemail; ?>">
                </div>
	          </div>
              
              <div class="form-group">
	            <div><label class="col-sm-3 control-label"><?php echo AFF_BANK_ACCOUNT_DETAILS; ?>: </label></div>
                <div class="col-sm-5">
	          	<textarea class="user-edit" name="account_details" cols="23" rows="2"><?php echo $editingaff->account_details; ?></textarea>
                </div>
              </div>  	           
	          
              <div class="form-group">	          
	            <div><label class="col-sm-3 control-label"><?php echo AFF_TAX_ID; ?>: </label></div>
                <div class="col-sm-5">
	            <input class="user-edit" type=text name=tax_id value="<?php echo $editingaff->tax_id; ?>">
                </div>
              </div> 	            

			  <div class="form-group">
	            <div><label class="col-sm-3 control-label"><input type=hidden name=commited value=yes></label>
                <div class="col-sm-5">
	            <input class="button light" type=submit name=Submit value="<?php echo AFF_UPDATE_BUTTON_TEXT; ?>">
                </div>
              </div>
	          
	        </div>
	      </form>
	
		<?php 
		$output .= ob_get_contents();
		ob_end_clean();		
	}
	return $output;
}
?>