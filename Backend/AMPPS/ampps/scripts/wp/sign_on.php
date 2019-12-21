<?php
@unlink(__FILE__);

// Validate if the request is from Softaculous
if($_REQUEST['pass'] != '[[autopass]]'){
	die("Unauthorized Access");
}

// Dummy plugin dir so that no plugins are loaded as they conflict with our login process
define('WP_PLUGIN_DIR', '[[softpath]]/[[autopass]]');

require('wp-blog-header.php');
require('wp-includes/pluggable.php');

$signon_user = '[[signon_username]]';

//Backword compatibility ($__setting['signon_username'] won't be there in previous versions <= 5.2.3)
if(!empty($signon_user) && !preg_match('/^\[\[(.*?)\]\]$/is', $signon_user)){
	$user = get_user_by('login', $signon_user);
}else{
	$user_info = get_userdata(1);
	// Automatic login //
	$username = $user_info->user_login;
	$user = get_user_by('login', $username);
}

// Redirect URL //
if ( !is_wp_error( $user ) )
{
    wp_clear_auth_cookie();
    wp_set_current_user ( $user->ID );
    wp_set_auth_cookie  ( $user->ID );

    $redirect_to = admin_url();
    wp_safe_redirect( $redirect_to );

    exit();
}
