<?php
/*
Plugin Name: Allow From X-Frame-Options
Plugin URI: http://1000camels.com
Description: This plugin allows WordPress to be embedded in iframes from a select list of sites
Version: 0.9
Author: Darcy W. Christ
Author URI: http://1000camels.com
License: GPL3
*/
?>
<?php

remove_action( 'login_init', 'send_frame_options_header', 10, 0 );
remove_action( 'admin_init', 'send_frame_options_header', 10, 0 );
add_action( 'login_init', 'send_allow_from_frame_options_header', 10, 0 );
add_action( 'admin_init', 'send_allow_from_frame_options_header', 10, 0 );

function send_allow_from_frame_options_header() {
        @header( 'X-Frame-Options: hku.hk' );
}