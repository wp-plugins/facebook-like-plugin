{\rtf1\ansi\ansicpg1252\deff0\deflang1033{\fonttbl{\f0\fswiss\fcharset0 Arial;}}
{\*\generator Msftedit 5.41.21.2509;}\viewkind4\uc1\pard\f0\fs20 <?php\par
/*\par
Plugin Name: Facebook Like Button Plugin\par
Plugin URI: http://www.lucascobb.com/facebook-like-button-plugin.html\par
Author URI: http://www.lucascobb.com.com\par
Description: This will add the Facebook Like button to your posts and pages.\par
Author: Lucas Cobb\par
Version: 0.1\par
*/\par
\par
function add_facebook_like($the_iframe = '')\par
\{\par
\tab $the_perma\tab = rawurlencode(get_permalink());\par
\tab $the_iframe\tab .= '<div id="facebook_like_button"><iframe src="http://www.facebook.com/plugins/like.php?href='.$the_perma.'&amp;layout=standard&amp;show-faces=true&amp;width=450&amp;action=like&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:450px; height:auto;"></iframe></div>';\par
\tab return $the_iframe;\par
\}\par
\par
add_action('the_content', 'add_facebook_like');\par
?>\par
}
 