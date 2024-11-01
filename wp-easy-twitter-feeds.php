<?php
/**
 *Plugin Name: Recent Tweets Widget
 *Plugin URI: http://onlineweb-master.com/
 *Description: It shows your latest tweets in your website through Widget.
 *Author: http://onlineweb-master.com/
 *Version: 1.0.0

 */

include('twitter_usr_validation.php');
require_once('controller/twitter_widget.class.php');
add_action( 'widgets_init', 'wpetf_reg_widget');
function wpetf_reg_widget()
{
	register_widget("wptt_TwitterTweets");
}

?>
