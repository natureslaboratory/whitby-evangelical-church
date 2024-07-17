<!doctype html>
<html lang="en-gb">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php
	// if (perch_get('s')) {
	// 	// perch_blog_post_meta(perch_get('s'));
	// }
	?>
	<title>
		<?php
		if (perch_get("s")) {
			perch_blog_post_field(perch_get("s"), 'postTitle');
		} else {
			perch_pages_title();
		}
		?>
	</title>
	<?php perch_page_attributes(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />

	<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Ropa+Sans&display=swap" media="print" onload="this.media='all'" />
	<?php
	function urlContainsString($url, $string)
	{
		if (strpos($url, $string)) {
			return true;
		}
		return false;
	}

	if (urlContainsString($_SERVER["REQUEST_URI"], "calendar")) {
		echo '
				<script src="/assets/js/main.min.js"></script>
				<link href="/assets/css/main.min.css" rel="stylesheet" />
			';
	}
	?>
	<script src="/assets/js/jquery-3.6.0.min.js"></script>

	<noscript>
		<link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
	</noscript>
	<link rel="stylesheet" type="text/css" href="/assets/css/App.css?t=1">
	
	<script src="https://kit.fontawesome.com/6b035dc64a.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php

	perch_pages_navigation(array(
		'template' => array('hamburgerMain.html', 'topNavSub.html'),
		'levels' => 1
	));

	?>
	<div id="content">