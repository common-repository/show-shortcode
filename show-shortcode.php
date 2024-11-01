<?php
/*
Plugin Name: Show Shortcode
Plugin URI: http://www.affiliatetechhelp.com
Description: Show Shortcode is a plugin that lets plugin developers display their shortcodes without executing them and without any special formatting or extra work. Just wrap your shortcode in the [showshortcode] tags and it will display your shortcode as plain text.
Version: 1.0
Author: Pat Friedl
Author URI: http://www.affiliatetechhelp.com
*/

if(!class_exists("ShowShortcode")){

	class ShowShortcode {

		function ShowShortcode() { //constructor

			add_shortcode('showshortcode', array(&$this, 'scd_showshortcode'));
			add_shortcode('showsc', array(&$this, 'scd_showshortcode'));
			add_shortcode('ssc', array(&$this, 'scd_showshortcode'));

		} // end function ShowShortcode

		function scd_showshortcode($atts, $content = null){
			extract(shortcode_atts(array('linebreak'=>''),$atts));
			$brackets = array();
			$brackets[0] = "/\[/";
			$brackets[1] = "/\]/";
			$replace_with = array();
			$replace_with[0] = "&#91;";
			$replace_with[1] = "&#93;";
			$content  = preg_replace($brackets, $replace_with, trim($content));
			$content .= (!empty($linebreak))? "<br />" : "";
			return $content;
		} // end scd_showshortcode

	} // end class ShowShortcode

} // end if class exists

// initialize the ShowShortcode class
if (class_exists("ShowShortcode")) {
	$wp_scd = new ShowShortcode();
}
?>