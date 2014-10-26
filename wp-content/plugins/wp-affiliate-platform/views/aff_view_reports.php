<div style="display:none; visibility:hidden !important;"> 
<script type="text/javascript" src="<?php echo WP_AFF_PLATFORM_URL.'/affiliates/lib/date/date.js'; ?>"></script>
    <!--[if IE]><script type="text/javascript" src="<?php echo WP_AFF_PLATFORM_URL.'/affiliates/lib/date/jquery.bgiframe.min.js'; ?>"></script>    <![endif]-->
<script type="text/javascript" src="<?php echo WP_AFF_PLATFORM_URL.'/affiliates/lib/date/jquery.datePicker-v2.js'; ?>"></script>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo WP_AFF_PLATFORM_URL.'/affiliates/lib/date/datePicker.css'; ?>">

<script type="text/javascript"> 
/* <![CDATA[ */
	jQuery(document).ready(function($) {
	    $(function() {
		    $('.date-pick').datePicker({startDate:"2008-01-01"});
	    });
	});
/*]]>*/  
</script>
</div>
<div class="aff_reports">	    
	<?php //echo AFF_SELECT_DATE_RANGE; ?>
    <p>Select a date range (yyyy-mm-dd) and hit <strong>Display Data</strong> button to view history.</p>

    <form id="dateform" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
    <input type="hidden" name="info_update" id="info_update" value="true" />

        <div id="startdate" class="floatL">
            <label for="start_date"><?php echo AFF_START_DATE_TEXT; ?>:  </label>
            <input type="text" id="start_date" name="start_date" class="date-pick" size="12">
        </div>
        <div id="enddate" class="floatL">
            <label for="end_date"><?php echo AFF_END_DATE_TEXT; ?>: </label>
            <input type="text" id="end_date" name="end_date" class="date-pick" size="12">
            
        </div>

    <div class="clear"></div>
	<div class="submit">
        <input type="submit" class="button light" name="info_update" value="<?php echo AFF_DISPLAY_DATA_BUTTON_TEXT; ?>" />
    </div>

    </form>
<?php     
?>
</div>