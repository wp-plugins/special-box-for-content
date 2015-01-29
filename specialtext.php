<?php
/**
 * @package Special Box for Content
 * @version 1
 */

/*

Plugin Name: Special Box for Content

Plugin URI: http://www.webcraft.gr/stfc

Description: This plugin helps you to add additional box for your page or post content. Just use [boxright] Content here [/boxright] or [boxleft] Content Here [/boxleft] to place the special content at left or right of the post content.

Author: Vasilis Triantafyllou

Version: 1

Author URI: http://www.webcraft.gr

*/
add_action('admin_menu', 'special_box_for_content');
function special_box_for_content() {
add_action( 'admin_init', 'register_sbsettings' );
add_options_page( 'Special Box Styling', 'Special Box Styling', 'manage_options', 'special_box_for_content', 'sb_settings_page' );
}

function register_sbsettings() {
register_setting( 'sb-settings-general', 'sb_analytics_code' ); 
register_setting( 'sb-settings-general', 'sb_box_width' ); 
register_setting( 'sb-settings-general', 'sb_background_color' );
register_setting( 'sb-settings-general', 'sb_padding_width' );
register_setting( 'sb-settings-general', 'sb_margin_width' );
register_setting( 'sb-settings-general', 'sb_section_color' );
register_setting( 'sb-settings-general', 'sb_border_width' ); 
register_setting( 'sb-settings-general', 'sb_border_style' ); 
register_setting( 'sb-settings-general', 'sb_border_radius' ); 
register_setting( 'sb-settings-general', 'sb_shadow' );
}

function sb_settings_page() {
?>
<div class="wrap">
<h2><?php _e('Special Box Settings', 'specialbox'); ?></h2>

<form method="post" action="options.php" id="carform">
 
 <?php settings_fields( 'sb-settings-general' ); ?>
 <?php do_settings_sections( 'sb-settings-general' ); ?>


<div style = "float:left;width:50%;">
 
 <table>
 <tr><td colspan="2"><h3>Styling options</h3></td></tr>
 <tr valign="top"><td><h3>Box Options</h3></td>
 </tr>
 <tr valign="top">
 <th scope="row">Box Width</th>
 <td>
 <input maxlength="4" name="sb_box_width" value ="<?php echo get_option('sb_box_width'); ?>"></input>
 <p class="description">Enter the width in pixels. <i>Default: 150</i></p>
 </td>
 </tr>

 
 <tr valign="top">
 <th scope="row">Enter the padding of the box</th>
 <td>
 <input maxlength="3" name="sb_padding_width" value ="<?php echo get_option('sb_padding_width'); ?>"></input>
 <p class="description">Enter the padding width in pixels. <i>Default: 5</i></p>
 </td>
 </tr>
 
 
 <tr valign="top">
 <th scope="row">Enter the margin of the box</th>
 <td>
 <input maxlength="3" name="sb_margin_width" value ="<?php echo get_option('sb_margin_width'); ?>"></input>
 <p class="description">Enter the margin width in pixels. <i>Default: 15</i></p>
 </td>
 </tr>
 
 <tr valign="top">
 <th scope="row">Background Color</th>
 <td>
 <input maxlength="7" name="sb_background_color" type="text" id="mv_cr_section_color" value="<?php echo get_option('sb_background_color'); ?>" data-default-color="#ffffff">
 <p class="description">You can find a color picker here: <a href = "http://www.w3schools.com/tags/ref_colorpicker.asp" target = "_blank">W3Schools Colorpicker</a>  <i>Default: #ffffff</i></p>
 </td>
 </tr>

 
 <tr valign="top">
 <th scope="row">Enter the shadow spread.  </th>
 <td>

 <input maxlength="2" name="sb_shadow" type="text" value="<?php echo get_option('sb_shadow'); ?>" data-default-color="1">

 <p class="description">Enter the shadow spread in pixels. <i>Default: 10</i></p>
 </td>
 </tr>
 </table>
 </div>
<div style = "float:right;width:50%;">

<table>
 <tr><td colspan="2"><h3>&nbsp;</h3></td></tr>
 <tr valign="top"><td><h3>Border Options</h3></td>
 </tr>
 
 <tr valign="top">
 <th scope="row">Border Color</th>
 <td>
 <input maxlength="7" name="sb_section_color" type="text" id="mv_cr_section_color" value="<?php echo get_option('sb_section_color'); ?>" data-default-color="#d2d2d2">
 <p class="description">You can find a color picker here: <a href = "http://www.w3schools.com/tags/ref_colorpicker.asp" target = "_blank">W3Schools Colorpicker</a> <i>Default: #d2d2d2</i></p>
 </td>
 </tr>
 

 <tr valign="top">
 <th scope="row">Border width</th>
 <td>
 <input maxlength="2" name="sb_border_width" value ="<?php echo get_option('sb_border_width'); ?>"></input>
 <p class="description">Enter the border width in pixels. <i>Default: 1</i></p>
 </td>
 </tr>
 
 <tr valign="top">
 <th scope="row">Border radius</th>
 <td>
 <input maxlength="2" name="sb_border_radius" value ="<?php echo get_option('sb_border_radius'); ?>"></input>
 <p class="description">Enter the border radius in pixels. <i>Default: 5</i></p>
 </td>
 </tr>
 
 <tr valign="top">
 <th scope="row">Border style</th>
 <td> 
 <select name="sb_border_style"> 
 <option value="<?php echo get_option('sb_border_style'); ?>"><?php echo get_option('sb_border_style'); ?></option>
 <option value="none">none</option> 
 <option value="solid">solid</option>
 <option value="dotted">dotted</option>
 <option value="dashed">dashed</option> 
 </select> 
 <p class="description">Select your border style. <i>Default: solid</i></p>

 </td>
 </tr>
 
 </table>
</div>


<div style = "clear:both;"></div>

 <?php submit_button();   ?>

</form>
<center><p>Usage: <code>[boxleft] Sample Content [/boxleft]</code> or <code>[boxright] Sample Content [/boxright]</code> on your post or page editor.</p><br/>


<p><a style = "text-align:right;" href = "http://www.webcraft.gr/sbfc" target = "blank"> Feedback & contact </a></p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form><br/>
Developed by <a href = "http://www.webcraft.gr" target = "_blank">WebCraft</a>
</center>
</div>
<?php } ?>
<?php
add_action("wp_head", "my_print_custom_style");
function my_print_custom_style() { ?>
<style>
.specialtext-content-right {
	float: right;
	background :<?php echo get_option('sb_background_color')?>;
	width: <?php echo get_option('sb_box_width')?>px;
	font-size: 12px;
	margin: <?php echo get_option('sb_margin_width')?>px 0 <?php echo get_option('sb_margin_width')?>px <?php echo get_option('sb_margin_width')?>px;
	border: <?php echo get_option('sb_border_width')?>px <?php echo get_option('sb_border_style')?> <?php echo get_option('sb_border_color')?>;
	padding: <?php echo get_option('sb_padding_width')?>px;
	border-radius:<?php echo get_option('sb_border_radius')?>px;
	}
.specialtext-content-left {
	float: left;
	background :<?php echo get_option('sb_background_color')?>;
	width: <?php echo get_option('sb_box_width')?>px;
	font-size: 12px;
	margin: <?php echo get_option('sb_margin_width')?>px <?php echo get_option('sb_margin_width')?>px <?php echo get_option('sb_margin_width')?>px 0 ;
	border: <?php echo get_option('sb_border_width')?>px <?php echo get_option('sb_border_style')?> <?php echo get_option('sb_border_color')?>;
	padding: <?php echo get_option('sb_padding_width')?>px;
	border-radius:<?php echo get_option('sb_border_radius')?>px;
	}

.effect {
	-webkit-box-shadow: 0 <?php echo get_option('sb_shadow')?>px 6px -6px #777;
	   -moz-box-shadow: 0 <?php echo get_option('sb_shadow')?>px 6px -6px #777;
	        box-shadow: 0 <?php echo get_option('sb_shadow')?>px 6px -6px #777;
}


</style><?php } ?>
<?php
function addcontent_shortcode1_sb( $atts, $content = null) {

 return '<div class="specialtext-content-left effect">' . $content  . '</div>';
}
add_shortcode( 'boxleft', 'addcontent_shortcode1_sb' );

function addcontent_shortcode2_sb( $atts, $content = null ) {
 return '<div class="specialtext-content-right effect">' . $content . '</div>';
}
add_shortcode( 'boxright', 'addcontent_shortcode2_sb' );
?>
<?php
function plugin_add_settings_link( $links ) {
$settings_link = '<a href="options-general.php?page=special_box_for_content">' . __( 'Settings' ) . '</a>';
array_push( $links, $settings_link );
return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'plugin_add_settings_link' );
?>