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
	<link rel="preconnect" href="https://kit.fontawesome.com" crossorigin />

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
	<link rel="stylesheet" type="text/css" href="/assets/css/App.css">
</head>

<body>
	<div class="c-hamburger">
		<div class="c-hamburger__cross">
			<svg width="12.32781mm" height="12.327812mm" viewBox="0 0 12.32781 12.327812" version="1.1" class="c-cross">
				<defs id="defs2" />
				<g inkscape:label="Layer 1" id="layer1" transform="translate(-8.837041,-271.65379)" class="c-cross__g">
					<rect class="c-cross__rect" width="16.394718" height="1.0394346" x="-194.03687" y="206.53433" transform="rotate(-45)" />
					<rect transform="rotate(-135)" y="-186.35922" x="-215.2514" height="1.0394346" width="16.394718" class="c-cross__rect" />
				</g>
			</svg>
		</div>
		<div class="c-hamburger__wrapper">
			<a href="/" class="c-hamburger__link">Home</a>
			<a href="/about" class="c-hamburger__link">About</a>
			<a href="/audio-library/" class="c-hamburger__link">Audio Library</a>
			<a href="/news" class="c-hamburger__link">News</a>
			<a href="/whats-on" class="c-hamburger__link">What's On</a>
			<a href="/contact" class="c-hamburger__link">Contact</a>
		</div>
	</div>
	<div id="content">