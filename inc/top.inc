<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $pageTitle ?></title>
		<link rel="stylesheet" href="css/long-scrolly.css">
		<link rel="stylesheet" href="css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|Source+Sans+Pro" rel="stylesheet">
		<?php if ($pageTitle == "Portfolio") {?>
			<link rel="stylesheet" href="flexslider/flexslider.css" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
			<script src="flexslider/jquery.flexslider-min.js"></script>
		<?php } ?>
	</head>

	<body>
		<?php include "inc/nav.inc"; ?>