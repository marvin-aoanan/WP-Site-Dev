<?php
function wp_aff_payment_history_view()
{
	$output = "";
	ob_start();	
	echo wp_aff_view_get_navbar();
	echo '<div id="wp_aff_inside">';
	//echo '<img src="'.WP_AFF_PLATFORM_URL.'/affiliates/images/money_bag.png" alt="payment icon" />';
	wp_aff_show_payment_history();
	echo '<div class="clear"></div></div>';
	echo wp_aff_view_get_footer();
	$output .= ob_get_contents();
	ob_end_clean();
	return $output;	
}
function wp_aff_show_payment_history()
{
	$currency = get_option('wp_aff_currency');
	global $wpdb;
	$aff_payouts_table = WP_AFF_PAYOUTS_TBL_NAME; 
	
	wp_aff_payments_history();
	
	echo '<strong>';  
	print "<br>".AFF_P_TOTAL.": ";
	 
	$row = $wpdb->get_row("select SUM(payout_payment) AS total from $aff_payouts_table where refid = '".$_SESSION['user_id']."'", OBJECT);
	
	print ($row->total != '' ? $row->total : '0');
	print " "; 
	print $currency; 
	print "<br><br>";
	echo '</strong>';	
}

function wp_aff_payments_history()
{
	include_once("aff_view_reports.php");
	
	$currency = get_option('wp_aff_currency');
	global $wpdb;
	
    if (isset($_POST['info_update']))
    {
    	$start_date = (string)$_POST["start_date"];
    	$end_date = (string)$_POST["end_date"];
        echo '<h4 class="title_aff_reports">';
        echo AFF_P_DISPLAYING_PAYOUTS_HISTORY.' <span style="color:#3d6117">'.$start_date.'</span> '.AFF_AND.' <span style="color:#3d6117">'. $end_date;
        echo '</span></h4>';
		        	
		$curr_date = (date ("Y-m-d"));		

		$aff_payouts_table = WP_AFF_PAYOUTS_TBL_NAME;   
		$wp_aff_payouts = $wpdb->get_results("select * from $aff_payouts_table where refid = '".$_SESSION['user_id']."' AND date BETWEEN '$start_date' AND '$end_date'",OBJECT);
		
		if ($wp_aff_payouts)
		{		
		    print "<table id='reports'>";
		    echo "<tr><th>".AFF_G_DATE."</th><th>".AFF_G_TIME."</th>";
		    echo "<th>".AFF_P_PAYMENT."</th></tr>";
		    
		    foreach ($wp_aff_payouts as $resultset) 
		    {
		        print "<tr>";
		      	print "<td class='reportscol col1'>";
		      	print $resultset->date;
		      	print "</td>";
		      	print "<td class='reportscol col1'>";
		      	print $resultset->time;
		      	print "</td>";
		      	print "<td class='reportscol'>";
		      	print $resultset->payout_payment;
		      	print " ";
		      	print $currency; 
		      	print "</td>";
		      	print "</tr>";
		    }
		    print "</table>";
		}
		else
		{
			echo "<p style='color:red; padding-top:20px;'>No Payments Found!</p>";
		}
    		
	}
	else
	{
		$aff_payouts_table = WP_AFF_PAYOUTS_TBL_NAME;   
		$resultset = $wpdb->get_results("select * from $aff_payouts_table where refid = '".$_SESSION['user_id']."' ORDER BY date and time LIMIT 20",OBJECT);
		
		if ($resultset) 
		{
			echo '<strong>';
			echo "<br><br>".AFF_P_LAST_20_PAYMENTS;
			echo '</strong>';
			print "<br><br>";
				
		    print "<table id='reports'>";
		    echo "<tr><th>".AFF_G_DATE."</th><th>".AFF_G_TIME."</th>";
		    echo "<th>".AFF_P_PAYMENT."</th></tr>";
		    
		    foreach ($resultset as $resultset) 
		    {
		        print "<tr>";
		      	print "<td class='reportscol col1'>";
		      	print $resultset->date;
		      	print "</td>";
		      	print "<td class='reportscol col1'>";
		      	print $resultset->time;
		      	print "</td>";
		      	print "<td class='reportscol'>";
		      	print $resultset->payout_payment;
		      	print " ";
		      	print $currency; 
		      	print "</td>";
		      	print "</tr>";
		    }
		    print "</table>";
		}
		else
		{
			echo "<p style='color:red;'>No Payments Received!</p>";
		}		
	}	
}
?>