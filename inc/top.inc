<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $pageTitle; ?></title>
		<link rel="stylesheet" href="css/long-scrolly.css">
		<link rel="stylesheet" href="css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|Source+Sans+Pro" rel="stylesheet">
		<?php if ($pageTitle == "Portfolio") {?>
			<link rel="stylesheet" href="flexslider/flexslider.css" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
			<script src="flexslider/jquery.flexslider-min.js"></script>
		<?php } ?>
		<?php if ($pageTitle == "Contact Form") {?>
			<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.1/build/base-min.css">
			<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.1/build/pure-min.css" integrity="sha384-CCTZv2q9I9m3UOxRLaJneXrrqKwUNOzZ6NGEUMwHtShDJ+nCoiXJCAgi05KfkLGY" crossorigin="anonymous">
		<?php } ?>
	</head>

	<body>
		<?php include "inc/nav.inc"; ?>