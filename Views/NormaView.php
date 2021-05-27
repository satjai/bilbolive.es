<!DOCTYPE html>
<html lang="es-es" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Jose">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <base href="<?php echo 'http://'.$_SERVER['SERVER_NAME'];?>" />
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
 
<div id="main">
  <p><a href="./norma/factura.pdf" target="_blank"> www.batuz.eus</a></p>
 <p><a href="https://www.batuz.eus/es/inicio" target="_blank"> www.batuz.eus</a></p>
<p><a href="https://www.batuz.eus/fitxategiak/batuz/normativa/2020%2009%2011%20ORDEN%20FORAL%201482-2020,%20de%209%20de%20septiembre.pdf" target="_blank">
 normativa1</a></p> 
 <p><a href="https://www.bizkaia.eus/lehendakaritza/Bao_bob/2020/12/23/I-839_cas.pdf" target="_blank">modificación</a></p>
  <p><a href="https://www.batuz.eus/fitxategiak/batuz/ticketbai/sinadura_elektronikoaren_zehaztapenak_especificaciones_de_la_firma_electronica_v1_0.pdf?hash=3628a87596aa330ef402183eb61a4227" target="_blank">Firma electrónica</a></p>
 
 
 
 
  <?php
 include('footer.php');
 ?>