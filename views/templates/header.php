<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="MobileOptimized" content="320" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta http-equiv="cleartype" content="on" />
<meta name="format-detection" content="telephone=no" />
<meta name="theme-color" content="#5d0088" />

<title><?php echo empty($page_title) ? '' : ' | '.$page_title; ?>Somewhere There's a Cure</title>

<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon"/>


<link href="<?php echo ASSETS_URL; ?>css/app<?php if (USE_MINIFIED_ASSETS) echo '.min'; ?>.css?<?php echo ASSETS_CACHE_FIX; ?>" rel="stylesheet" type="text/css" />

<?php
	if(isset($add_css))
	{
		foreach($add_css as $sheet)
		{
			$add_ext = (substr($sheet, -4) != '.css') ? '.css' : '';
			echo '<link href="'.$sheet.$add_ext.'" rel="stylesheet" type="text/css"/>'.chr(10);
		}
	}
?>

<!--[if lt IE 9 ]>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="<?php echo JQUERY_URL; ?>"></script>
<!--<![endif]-->
<script type="text/javascript" src="<?php echo ASSETS_URL; ?>js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo ASSETS_URL; ?>js/main<?php if (USE_MINIFIED_ASSETS) echo '.min'; ?>.js?<?php echo ASSETS_CACHE_FIX; ?>"></script>

<?php
	if(isset($add_js_header))
	{
		foreach($add_js_header as $js)
		{
			$add_ext = (substr($js, -3) != '.js') ? '.js' : '';
			echo '<script type="text/javascript" src="'.$js.$add_ext.'"></script>'.chr(10);
		}
	}
?>

</head>

<body class="<?php if (isset($is_home_page) && $is_home_page) echo 'is-home-page'; ?>">

	<?php
		require_once(BASE_PATH.'views/templates/header_app.php');

		if (isset($title_bar_title))
		{
			require_once(BASE_PATH.'views/templates/title_bar.php');
		}
	?>

	<main>
		<div class="container">
			<section class="page-content">
