<!DOCTYPE html>
<html lang="es-es" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Jose">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <base href="<?php echo 'https://'.$_SERVER['SERVER_NAME'];?>" />
	<?php // header("Content-type: application/json; charset=utf-8"); ?>
	<title>PDO</title>
	<style>
	*{padding:0;margin:0;padding-left:1rem;}
	#menutop{padding-bottom:1rem;}
	#menutop li{display:inline;list-style:none;}	#menutop li a{text-decoration:none;}
	h2{margin:2rem;}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="./script.js"></script>
	
</head>
 <body>
 <ul id="menutop">
<li> <a href="/Index/display">displayFORMULARIO </a> </li>
<li> <a href="/Index/page">pagJSON</a> </li>
<li> <a href="/Index/bound">FETCH_BOUND</a> </li>
</ul>
<div id="main">
 