<?php
/*
Plugin Name: Facebook Like Button Plugin
Plugin URI: http://www.lucascobb.com/facebook-like-button-plugin.html
Author URI: http://www.lucascobb.com.com
Description: This will add the Facebook Like button to your posts and pages.
Author: Lucas Cobb
Version: 0.1
*/

function add_facebook_like($the_iframe = '')
{
	$the_perma	= rawurlencode(get_permalink());
	$the_iframe	.= '<div id="facebook_like_button"><iframe src="http://www.facebook.com/plugins/like.php?href='.$the_perma.'&amp;layout=standard&amp;show-faces=true&amp;width=450&amp;action=like&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:450px; height:auto;"></iframe></div>';
	return $the_iframe;
}

add_action('the_content', 'add_facebook_like');
?>