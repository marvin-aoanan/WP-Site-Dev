<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
	<fieldset>
    <div class="input-group">
		<input class="form-control" type="text" name="s" id="s" value="<?php _e('Search', 'framework') ?>" onfocus="if(this.value=='<?php _e('Search', 'framework') ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e('Search', 'framework') ?>';" /><div class="input-group-btn"><button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success btn_submit"><span class="glyphicon glyphicon-search"></span></button></div>
        </div>
	</fieldset>
</form>