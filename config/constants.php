<?php

	$server_name	= strtolower($_SERVER['SERVER_NAME']);

	define('IS_LOCAL_SERVER', in_array($server_name, array('172.16.237.130', 'localhost')));
	define('BASE_URL', (IS_LOCAL_SERVER) ? '/somewheretheresacure/' : '/');
	define('BASE_PATH', realpath(dirname(__FILE__)).'/../');
	define('ASSETS_URL', BASE_URL.'assets/app/dist/');
	define('ASSETS_PATH', BASE_PATH.'assets/app/dist/');
	define('JQUERY_URL', '//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js');
	define('USE_MINIFIED_ASSETS', FALSE);
	define('ASSETS_CACHE_FIX', '1');

?>
