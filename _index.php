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
			<form action="action/action.php" method="POST" onsubmit="return validar_form();">
	      <label>Item  :  </label>
	      <input name="item1" type="text" id="item1" onblur="valida_item()"><br><br>
	      <span id="mensajito_itemvacio"></span> 	  <!-- este ID "mensaje" será para información al usuario si vacio-->
	      <label>Stock: </label>
	      <input name="stock1" type="number" id="stock1" onblur="valida_item()"><br><br>
	      <span id="mensajito_vacio"></span> 	  <!-- este ID "mensaje" será para información al usuario si vacio -->
				<input type="submit" value="Enviar">
			</form>
		</article>
	</section>
	<footer></footer>
</body>
</html>