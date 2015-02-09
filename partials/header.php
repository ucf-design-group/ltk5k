<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Zombie Run | Campus Activities Board</title>
		<link href='style.css' rel='stylesheet'>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<style>
<?php		switch (isset($_GET['p']) ? $_GET['p'] : "") {
			case "zombies": echo "#runners, #volunteers { display: none; }"; break;
			case "volunteers": echo "#runners, #zombies { display: none; }"; break;
			default: echo "#zombies, #volunteers { display: none; }"; } ?>
		</style>
<head>