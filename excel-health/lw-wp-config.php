<?php

/** LW specific constants **/
define('LWMWP_SITE_ENDPOINT', 'https://app.uhy2gxud-liquidwebsites.com/api/sites/1/');
define('LWMWP_API_TOKEN',     'bcb4d7b2-0855-424b-95f8-e80f10dd4ca2');

/** Core auto updates **/
defined('WP_AUTO_UPDATE_CORE') || define('WP_AUTO_UPDATE_CORE', 'minor');

/** Fail2Ban **/
defined('WP_FAIL2BAN_BLOCK_USER_ENUMERATION') || define('WP_FAIL2BAN_BLOCK_USER_ENUMERATION', true);

/** Always use the direct method for file access **/
defined('FS_METHOD')           || define('FS_METHOD', 'direct');

/* Turn HTTPS 'on' if HTTP_X_FORWARDED_PROTO matches 'https' */
if ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
    $_SERVER['HTTPS'] = 'on';
}

/** Set Client IP based on HTTP_X_FORWARDED_FOR if provided. **/
if ( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) && ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	$ip_list = explode( ',', $_SERVER['HTTP_X_FORWARDED_FOR'] );
	$_SERVER['REMOTE_ADDR'] = trim( $ip_list[0] );
}





