<!doctype html>
<html lang="es">
<head>
	<!-- Informació Meta -->
	<meta charset="utf-8"/>
	<meta name="description" content="Evaluación MF0492_3">
	<meta name="keywords" content="programación, entorno web, servidor">
	<meta name="author" content="Rossi Salvador">
	
	<!-- Enllaç a l'arxiu CSS Extern -->
	<link rel=stylesheet href="css/style.css" type="text/css"/>
	
	<!--CSS Intern-->
	<style type="text/css">
		
	</style>
	
	<!-- Enllaç a Javascript Extern -->
	<script  type="text/javascript" src="js/javascript.js"></script>
	
	<!-- favicon -->
	<link href="img/favicon.png" rel="icon" type="image/png" />
	
	<!-- Títol de la pàgina -->
	<title>Evaluación MF0492_3</title>
</head>
<body>
	<header></header>
	<section>
		<article>
			<h2>Evaluación MF0492_3</h2>
			<!-- inicio FORMULARIO con método POST -->
			<form action="action/action.php" method="POST">
	      <label>Item</label>
	      <input name="item" type="text" id="item" onblur="comprueba_vacio()"><br>
	      <span id="mensajito_vacio"></span> 	  <!-- este ID "mensaje" será para información al usuario -->
	      <label>Stock</label>
	      <input name="stock" type="number" id="stock" onblur="comprueba_vacio()"><br>
	      <span id="mensajito_vacio"></span> 	  <!-- este ID "mensaje" será para información al usuario -->
		    <p><img src="img/preloader.gif" id="preloader" style="display:none" ></p>
				<span id="enviar"></span>
			</form>
			<?php echo "Hola Món!" ?>
		</article>
	</section>
	<footer></footer>
</body>
</html>