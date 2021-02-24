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
		<h2>Criando constantes</h2>
			<?php
				/* Declarar uma constante case sensitive */
				define("constanteCaseSensitive","CASE_SENSITIVE");
				echo constanteCaseSensitive;
				echo "<br/>";
				define("constanteNaoCaseSensitive","NAO_CASE_SENSITIVE", True);
				echo constanteNaoCaseSensitive;
				echo"<br/>";

				/* Outra forma de Declarar uma constante */
				const  CONSTANT = ' Constante com "const"';
				echo CONSTANT;
				echo "<br/>";

				/* Constante com Array */
				const Pokemon = array('Pikachu','Lizardon','Gekkouga','Eve');
				for ($cont = 0; $cont <= 4;$cont++){
					echo Pokemon[$cont].", ";
				} 
				
			?>

			<br/>

			<h1>Condicionais IF, ELSE, SWITCH, WHILE E FOR</h3>
			<h2>If e Else</h2>
			<?PHP
				/*De acordo com o valor da variavel $saldoBancario
				o resultado do programa pode variar */
				echo "<p>SsaldoBancario = 42389.50;<br/>
				if(SsaldoBancario > 42390){<br/>
					echo 'Vou comprar um carro 0KM :D';<br/>
				}else{<br/>
					echo 'Vou comprar um carro usado :/';<br/>
				}</p>";

				$saldoBancario = 42389.50;
				if($saldoBancario > 42390){
					echo "Vou comprar um carro 0KM";
				}else{
					echo "Vou comprar um carro usado";
				}
			?>
		
				
				<h2>Switch</h2>
				<?PHP
					/*Mensagem de erro/sucesso para a validação 
					de formulários. 
					O algoritimo monta a mensagem de erro de
					acordo com a quantidade de erros encontrada*/

					echo "<p>SquantidadeErros = 3;<br/>
					switch(SquantidadeErros){<br/>
						case 0:<br/>
							SmensagemDeErro = 'Nenhum';<br/>
							break;<br/>
							<br/>
						case 1:<br/>
							SmensagemDeErro = 'Um';<br/>
							break;<br/>
							<br/>
						case 2:<br/>
							SmensagemDeErro = 'Dois';<br/>
							break;<br/>
							<br/>
						default:<br/>
							SmensagemDeErro = 'Mais de dois';<br/>	
							<br/>
					}<br/>
					SmensagemDeErro .= 'erro(s) encontrado(s)';<br/>
					echo SmensagemDeErro;</p>";

					$quantidadeErros = 3; //tem que ser maior ou igual a 0
					switch($quantidadeErros){
						case 0:
							$mensagemDeErro = "Nenhum";
							break;
						
						case 1:
							$mensagemDeErro = "Um";
							break;
						
						case 2:
							$mensagemDeErro = "Dois";
							break;

						default:
							$mensagemDeErro = "Mais de dois";	

					}
					$mensagemDeErro .= " erro(s) encontrado(s)";
					echo $mensagemDeErro;
				?>
				<br/>
				<h2>While</h2>
				<?PHP
				/*O while recebe como parâmetro um valor booleano
				e permanece em looping até quando a condição for
				verdadeira*/
				echo "<p>Scont = 0;<br/>
				while(Scont++ < 10) {<br/>
					echo Scont;<br/>
				}</p>";
				$cont = 0;
				while($cont++ < 10) {
					echo $cont."<br/>";
				}
				?>
				<br/>
				<h2>For</h2>
				<?PHP
				/*O for recebe 3 parâmetros separados por ponto e virgula
				o primeiro é a inicialização do contador
				o segundo é um booleano que define o final do contador
				o terceiro é o incremento para o contador */
				echo "<p>for(Scont = 1; Scont <= 10; Scont++){<br>
					echo Scont<br>
				}</p>";
				for($cont = 1; $cont <= 10; $cont++){
					echo $cont."<br/>";
				}
				
				?>
	</body>
</html>