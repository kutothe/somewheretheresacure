<?php

	require_once('./config/config.php');
	require_once('./config/constants.php');



	$params				= NULL;
	$view				= 'our_story.php';
	$view_path			= './views/';

	if (is_array($_GET) && count($_GET) == 1)
	{
		reset($_GET);
		$first_key		= trim(key($_GET), '/');
		$parts			= explode('/', $first_key);

		if (count($parts) > 0)
		{
			$view		= $parts[0].'.php';
			// check to see if invalid view file
			if ( ! is_file($view_path.$view))
			{
				$view	= 'error_404.php';
			}
			else
			{
				define('SELECTED_VIEW', $view);
			}
		}
	}

	require_once($view_path.$view);
?>
