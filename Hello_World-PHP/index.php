<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset = "utf-8">
		<title>Hello World</title>
	</head>
	
	<body>
		<h1> Primeiro, estudando variáveis PHP</h1>
		<h2> Variável nula: </h2>
		<?PHP
			/*Declarar uma variável e deixar ela nula*/
			$variavelnula; 
			echo "<p>".$variavelnula."</p>"; //aqui vai dar erro
		?>
		<br/>
		<h2> Variável String </h2>
		<?php
			/*Declarar uma váriavel String*/
			$variavelString123 = "um, dois, três";
			echo "<p>".$variavelString123."</p>" 
		?>
		<br/>
		<h2> Variável Integer </h2>
		<?PHP
			/* Declarar uma váriavel Integer */	
			$variavelInteger = 123;
			echo "<p>".$variavelInteger."</p>"	
		?>
		<br/>
		<h2> Variável Double </h2>
			<?PHP
				/* Declarar uma variável Double */
				$variavelDouble = 0.123654654169161;
				echo "<p>".$variavelDouble."</p>"
			?>

		<h1> Constantes </h1>
		<h2>Criando uma constante</h2>
			<?php
				/* Declarar uma constante case sensitive */
				define("constanteCaseSensitive","CASE_SENSITIVE");
				echo constanteCaseSensitive;
				echo "<br/>";
				define("constanteNaoCaseSensitive","NAO_CASE_SENSITIVE", True);
				echo constanteNaoCaseSensitive;
			?>
	</body>
</html>