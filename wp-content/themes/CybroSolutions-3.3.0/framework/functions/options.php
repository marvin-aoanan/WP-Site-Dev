<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */
 
 /*
 * This is an example of how to override a default filter
 * for 'textarea' sanitization and $allowedposttags + embed and script.
 */
add_action('admin_init','optionscheck_change_santiziation', 100);
function optionscheck_change_santiziation() {
    remove_filter( 'of_sanitize_textarea', 'of_sanitize_textarea' );
    add_filter( 'of_sanitize_textarea', 'custom_sanitize_textarea' );
}
function custom_sanitize_textarea($input) {
    global $allowedposttags;
    $custom_allowedtags["embed"] = array(
      "src" => array(),
      "type" => array(),
      "allowfullscreen" => array(),
      "allowscriptaccess" => array(),
      "height" => array(),
          "width" => array()
      );
      $custom_allowedtags["script"] = array();
      $custom_allowedtags = array_merge($custom_allowedtags, $allowedposttags);
      $output = wp_kses( $input, $custom_allowedtags);
    return $output;
}

function optionsframework_option_name() {

// This gets the theme name from the stylesheet
$themename = get_option( 'stylesheet' );
$themename = preg_replace("/\W/", "_", strtolower($themename) );

$optionsframework_settings = get_option( 'optionsframework' );
$optionsframework_settings['id'] = $themename;
update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {

	$bgrepeat_array = array(
			'stretch' => __('stretch', 'options_framework_theme'),
			'repeat' => __('repeat', 'options_framework_theme'),
			'repeat-x' => __('repeat-x', 'options_framework_theme'),
			'repeat-y' => __('repeat-y', 'options_framework_theme'),
			'no-repeat' => __('no-repeat', 'options_framework_theme')
		);
	$bgposition_array = array(
			'top left' => __('top left', 'options_framework_theme'),
			'top center' => __('top center', 'options_framework_theme'),
			'top right' => __('top right', 'options_framework_theme'),
			'center center' => __('center center', 'options_framework_theme'),
			'bottom left' => __('bottom left', 'options_framework_theme'),
			'bottom center' => __('bottom center', 'options_framework_theme'),
			'bottom right' => __('bottom right', 'options_framework_theme')
		);
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	$options = array();

				
/* ----------------------------------------------------- */
/* General Settings */
/* ----------------------------------------------------- */
						
	$options[] = array( "name" => "General Settings",
						"type" => "heading");
						
	$options[] = array( "name" => "Show Notification Bar",
						"desc" => "Notification Bar (Sliding Bar above Header)",
						"id" => "infobar_checkbox",
						"std" => "1",
						"type" => "checkbox"); 
						
	$options[] = array( "name" => "Notification Bar visible on Pageload?",
						"desc" => "Check if Notification Bar should be visible on Pageload. <br />Make sure to delete Cookies before testing, because the Notification Bar uses cookies - so if you see it closed even though you checked the box just delete cookies and reload the Page - also the other way round.",
						"id" => "infobar_visible",
						"std" => "1",
						"type" => "checkbox"); 
	
	$options[] = array( "name" => "Notification Bar Text (above Header)",
						"desc" => "Notification Bar descriptive Text",
						"id" => "infobar_text",
						"std" => "This is an incredibly powerful &amp; fully responsive WordPress Theme. Grab your copy on <a href='http://cybrosolutions.net' target='_blank'>Cybro Solutions</a>",
						"type" => "textarea"); 
	
	$options[] = array( "name" => "Show Latestwork on Home Page",
						"desc" => "Show Latest Work on Home Page",
						"id" => "latestwork_checkbox",
						"std" => "1",
						"type" => "checkbox"); 
						
	$options[] = array( "name" => "Latest Work Text",
						"desc" => "Descriptive Text of Latest Work on Home Page",
						"id" => "latestwork_text",
						"std" => "Maecenas a mi nibh, eu euismod orci. Vivamus viverra lacus vitae tortor molestie malesuada.<br /><br /><a href='#' class='btn'>Show all Works</a>",
						"type" => "textarea");
						
	$options[] = array( "name" => "Show Latest Posts from Blog on Home Page",
						"desc" => "Show Latest Posts from Blog on Home Page",
						"id" => "latestposts_checkbox",
						"std" => "1",
						"type" => "checkbox"); 
						
	$options[] = array( "name" => "Latest Posts Text",
						"desc" => "Descriptive Text of Latest Posts on Home Page",
						"id" => "latestposts_text",
						"std" => "Maecenas a mi nibh, eu euismod orci. Vivamus viverra lacus vitae tortor molestie malesuada.<br /><br /><a href='#' class='btn'>Show all Posts</a>",
						"type" => "textarea");
						
	/*$options[] = array( "name" => "Show Twitter-Feed above Footer",
						"desc" => "Show Twitter-Feed above Footer (configure your Twitter Name in Social Media)",
						"id" => "twitterfooter_checkbox",
						"std" => "1",
						"type" => "checkbox"); */
	
	$options[] = array( "name" => "Contact E-Mail",
						"desc" => "Contact Form E-Mail Address",
						"id" => "contact_email",
						"std" => "",
						"type" => "text");
	$options[] = array( "name" => "Contact Number",
						"desc" => "Contact Form Number. Can also be appear in the header.",
						"id" => "contact_number",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Contact Information",
						"desc" => "Insert your Contact Information here. This will be display beside the contact form.",
						"id" => "contact_information",
						"std" => "<h3>Contact Information</h3>
Cybro Solutions<br />
Manila, Philippines 1218 <br />
<br /><br />

Phone: +63 792 2048<br />
Email: info@cybrosolutions.net<br />
Web: http://cybrosolutions.net<br />",
						"type" => "textarea");
	
	$options[] = array( "name" => "Google Analytics Code",
						"desc" => "Insert your Google Analytics Code",
						"id" => "analytics_code",
						"std" => "",
						"type" => "textarea");
						

															

/* ----------------------------------------------------- */
/* Styling */
/* ----------------------------------------------------- */
						
	$options[] = array( "name" => "Styling",
						"type" => "heading");
						
	$options[] = array( "name" => "Primary Color",
						"desc" => "Select your Color.",
						"id" => "primary_colorpicker",
						"std" => "#79a007",
						"type" => "color");
						
	$options[] = array( "name" => "Default Background Image",
						"desc" => "Choose Default Background Image",
						"id" => "bgimage_upload",
						"type" => "upload");
	
	$options[] = array( 'name' => "Background Repeat / Stretch",
						'id' => 'bgrepeat_select',
						'std' => 'stretch',
						'type' => 'select',
						'class' => 'mini', //mini, tiny, small
						'options' => $bgrepeat_array);
	
	$options[] = array( 'name' => "Background Position (if repeated)",
						'id' => 'bgposition_select',
						'std' => 'top left',
						'type' => 'select',
						'class' => 'mini', //mini, tiny, small
						'options' => $bgposition_array);
						
	$options[] = array( "name" =>  "Default Background Color",
						"desc" => "Change the Default Background Color",
						"id" => "default_background",
						"std" => "#FFFFFF",
						"type" => "color");
	
	$options[] = array( "name" => "Custom CSS Code",
						"desc" => "Insert your Custom CSS",
						"id" => "css_code",
						"std" => "",
						"type" => "textarea");


/* ----------------------------------------------------- */
/* Header Settings */
/* ----------------------------------------------------- */
	$options[] = array( "name" => "Header",
						"type" => "heading");
						
	$options[] = array( "name" => "Favicon",
						"desc" => "Upload a 16x16px Favicon (ico/png/gif)",
						"id" => "favicon_upload",
						"type" => "upload");
						
	$options[] = array( "name" => "Header Logo",
						"desc" => "Header Logo",
						"id" => "logo_upload",
						"type" => "upload");
						
	/*$options[] = array( "name" => "Header Logo Margin-Top",
						"desc" => "Margin-Top of Header Logo (Default: 0px)",
						"id" => "logo_margin",
						"std" => "0px",
						"type" => "text");*/
						
	$options[] = array( "name" => "Header Slogan",
						"desc" => "Header Slogan",
						"id" => "slogan_upload",
						"type" => "upload");
						
	$options[] = array( "name" => "Header Image",
						"desc" => "Header Image",
						"id" => "header_image_upload",
						"type" => "upload");											
						
	$options[] = array( "name" => "Header Text",
						"desc" => "Descriptive Text (Header Text)",
						"id" => "header_text",
						"std" => "This is an incredibly powerful &amp; fully responsive WordPress Theme.",
						"type" => "textarea");	
						

/* ----------------------------------------------------- */
/* Footer Settings */
/* ----------------------------------------------------- */
	$options[] = array( "name" => "Footer",
						"type" => "heading");
						
	$options[] = array( "name" => "Show Footer Menu",
						"desc" => "Show Footer Bar Menu (Edit your footer menu text and links through Appearance >> Widgets >> Footer Menu)",
						"id" => "footer_menu_checkbox",
						"std" => "1",
						"type" => "checkbox"); 					
	
	$options[] = array( "name" => "Misc",
						"desc" => "You can put some html, text, etc..",
						"id" => "footer_html",
						"std" => "",
						"type" => "textarea");					
	
	
	$options[] = array( "name" => "Footer Logo",
						"desc" => "Footer Logo",
						"id" => "footerlogo_upload",
						"type" => "upload");
						
						
	$options[] = array( "name" => "Copyright Text",
						"desc" => "Descriptive Text (under Footer Logo)",
						"id" => "copyright_text",
						"std" => "This is an incredibly powerful &amp; fully responsive WordPress Theme.",
						"type" => "textarea");
						
/* ----------------------------------------------------- */
/* Social Media */
/* ----------------------------------------------------- */
						
	$options[] = array( "name" => "Social Media",
						"type" => "heading");
	
	$options[] = array( "name" => "Twitter",
						"desc" => "Twitter Username",
						"id" => "twitter_url",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Facebook",
						"desc" => "Facebook Url",
						"id" => "facebook_url",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Houzz3",
						"desc" => "Houzz3 Url",
						"id" => "houzz3_url",
						"std" => "",
						"type" => "text");							
						
	$options[] = array( "name" => "Dribbble",
						"desc" => "Dribbble Url",
						"id" => "dribbble_url",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Flickr",
						"desc" => "Flickr Url",
						"id" => "flickr_url",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Google",
						"desc" => "Google Url",
						"id" => "google_url",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Vimeo",
						"desc" => "Vimeo Url",
						"id" => "vimeo_url",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Youtube",
						"desc" => "Youtube Url",
						"id" => "youtube_url",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "LinkedIn",
						"desc" => "LinkedIn Url",
						"id" => "linkedin_url",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Pinterest",
						"desc" => "Pinterest Url",
						"id" => "pinterest_url",
						"std" => "",
						"type" => "text");
						

/* ----------------------------------------------------- */
/* Slider */
/* ----------------------------------------------------- */
						
	$options[] = array( "name" => "Slider",
						"type" => "heading");
						
	$options[] = array( "name" => "Use Royal Slider",
						"desc" => "Use Royal Slider as Slider plugin?  Check this to enable Royal Slider",
						"id" => "royalslider_checkbox",
						"std" => "0",
						"type" => "checkbox"); 					
	
	$options[] = array( "name" => "Slide 1",
						"desc" => "Image size should be 940px by 430px.",
						"id" => "slide1_upload",
						"type" => "upload");
	
	$options[] = array( "name" => "Slide 1 Caption",
						"desc" => "Caption for Slide 1. Can put HTML ex: <p></p>",
						"id" => "slide1_caption",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Slide 1 URL",
						"desc" => "URL for Slide 1",
						"id" => "slide1_url",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Slide 2",
						"desc" => "Image size should be 940px by 430px.",
						"id" => "slide2_upload",
						"type" => "upload");
						
	$options[] = array( "name" => "Slide 2 Caption",
						"desc" => "Caption for Slide 2",
						"id" => "slide2_caption",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Slide 2 URL",
						"desc" => "URL for Slide 2",
						"id" => "slide2_url",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Slide 3",
						"desc" => "Image size should be 940px by 430px.",
						"id" => "slide3_upload",
						"type" => "upload");
						
	$options[] = array( "name" => "Slide 3 Caption",
						"desc" => "Caption for Slide 3",
						"id" => "slide3_caption",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Slide 3 URL",
						"desc" => "URL for Slide 3",
						"id" => "slide3_url",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Slide 4",
						"desc" => "Image size should be 940px by 430px.",
						"id" => "slide4_upload",
						"type" => "upload");
						
	$options[] = array( "name" => "Slide 4 Caption",
						"desc" => "Caption for Slide 4",
						"id" => "slide4_caption",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Slide 4 URL",
						"desc" => "URL for Slide 4",
						"id" => "slide4_url",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Slide 5",
						"desc" => "Image size should be 940px by 430px.",
						"id" => "slide5_upload",
						"type" => "upload");
	
	$options[] = array( "name" => "Slide 5 Caption",
						"desc" => "Caption for Slide 5",
						"id" => "slide5_caption",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Slide 5 URL",
						"desc" => "URL for Slide 5",
						"id" => "slide5_url",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Slide 6",
						"desc" => "Image size should be 940px by 430px.",
						"id" => "slide6_upload",
						"type" => "upload");
	
	$options[] = array( "name" => "Slide 6 Caption",
						"desc" => "Caption for Slide 6",
						"id" => "slide6_caption",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Slide 6 URL",
						"desc" => "URL for Slide 6",
						"id" => "slide6_url",
						"std" => "",
						"type" => "text");
/********************************/
	$options[] = array( "name" => "Slide 7",
						"desc" => "Image size should be 940px by 430px.",
						"id" => "slide7_upload",
						"type" => "upload");
	
	$options[] = array( "name" => "Slide 7 Caption",
						"desc" => "Caption for Slide 7",
						"id" => "slide7_caption",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Slide 7 URL",
						"desc" => "URL for Slide 7",
						"id" => "slide7_url",
						"std" => "",
						"type" => "text");
						
						
	$options[] = array( "name" => "Slide 8",
						"desc" => "Image size should be 940px by 430px.",
						"id" => "slide8_upload",
						"type" => "upload");
	
	$options[] = array( "name" => "Slide 8 Caption",
						"desc" => "Caption for Slide 8",
						"id" => "slide8_caption",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Slide 8 URL",
						"desc" => "URL for Slide 8",
						"id" => "slide8_url",
						"std" => "",
						"type" => "text");
	
						
	$options[] = array( "name" => "Slide 9",
						"desc" => "Image size should be 940px by 430px.",
						"id" => "slide9_upload",
						"type" => "upload");
	
	$options[] = array( "name" => "Slide 9 Caption",
						"desc" => "Caption for Slide 9",
						"id" => "slide9_caption",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Slide 9 URL",
						"desc" => "URL for Slide 9",
						"id" => "slide9_url",
						"std" => "",
						"type" => "text");
						
						
	$options[] = array( "name" => "Slide 10",
						"desc" => "Image size should be 940px by 430px.",
						"id" => "slide10_upload",
						"type" => "upload");
	
	$options[] = array( "name" => "Slide 10 Caption",
						"desc" => "Caption for Slide 10",
						"id" => "slide10_caption",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Slide 10 URL",
						"desc" => "URL for Slide 10",
						"id" => "slide10_url",
						"std" => "",
						"type" => "text");					
						
/* ----------------------------------------------------- */
/* Miscellaneous */
/* ----------------------------------------------------- */
	/*$options[] = array( "name" => "Miscellaneous",
						"type" => "heading");
						
	$options[] = array( "name" => "Hero Sidebar",
						"desc" => "Descriptive HTML/Text (Put Some content for hero sidebar)",
						"id" => "hero_sidebar",
						"std" => "This is an incredibly powerful &amp; fully responsive WordPress Theme.",
						"type" => "textarea");		*/					
									

/* ----------------------------------------------------- */
/* EOF */
/* ----------------------------------------------------- */
									
	return $options;
}