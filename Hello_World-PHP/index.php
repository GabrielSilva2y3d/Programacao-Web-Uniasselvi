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
				echo "Constante com Array: ";
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
				echo '<p>$saldoBancario = 42389.50;<br/>
				if($saldoBancario > 42390){<br/>
					echo "Vou comprar um carro 0KM :D";<br/>
				}else{<br/>
					echo "Vou comprar um carro usado :/";<br/>
				}</p>';

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

					echo '<p>$quantidadeErros = 3;<br/>
					switch($quantidadeErros){<br/>
						case 0:<br/>
							$mensagemDeErro = "Nenhum";<br/>
							break;<br/>
							<br/>
						case 1:<br/>
							$mensagemDeErro = "Um";<br/>
							break;<br/>
							<br/>
						case 2:<br/>
							$mensagemDeErro = "Dois";<br/>
							break;<br/>
							<br/>
						default:<br/>
							$mensagemDeErro = "Mais de dois";<br/>	
							<br/>
					}<br/>
					$mensagemDeErro .= "erro(s) encontrado(s)";<br/>
					echo $mensagemDeErro;</p>';

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
				echo '<p>Scont = 0;<br/>
				while($cont++ < 10) {<br/>
					echo $cont;<br/>
				}</p>';
				$cont = 0;
				while($cont++ < 10) {
					echo $cont."  ";
				}
				?>
				<br/>
				<h2>For</h2>
				<?PHP
				/*O for recebe 3 parâmetros separados por ponto e virgula
				o primeiro é a inicialização do contador
				o segundo é um booleano que define o final do contador
				o terceiro é o incremento para o contador */
				echo '<p>for($cont = 1; $cont <= 10; $cont++){<br>
					echo $cont<br>
				}</p>';
				for($cont = 1; $cont <= 10; $cont++){
					echo $cont."  ";
				}
				
				?>
				<br/>
				
				<h1>FUNÇÃO ISSET()</h1>

				<p> A função isset() recebe como parâmetro a variável a ser verificada e retorna um booleano, informando se esta variável está ou não declarada na execução do programa.</p>

				<H2> QUANDO A VARIÁVEL NÃO ESTÁ DECLARADA</H2>
				<?php
					//declarar uma variável porém deixa-la nula:
					echo  '$variavel;<br>';
					$variavel;
					if (isset($variavel)){
						echo "A variável está declarada";
					}else{
						echo "A variável não está declarada";
					}
				?>
				<h2> QUANDO A VARIÁVEL ESTÁ DECLARADA</h2>
				<?PHP
					echo  '$variavel = 123;<br>';
					//declarar uma variável porém deixa-la nula:
					$variavel = 123;
					if (isset($variavel)){
						echo "A variável está declarada";
					}else{
						echo "A variável não está declarada";
				}
				?>

				<br/>

				<h1>Strings no PHP</h1>
				<?php
					/*Declaramos uma variável string para armazenar
					uma linguagem de programação*/
					$linguagemProgramacao = 'Python';
				?>
				<h2>echo com aspas simples:</h2>
				<?PHP
					echo '<p>Estudar $linguagemProgramacao é muito legal!!</p>'				
				?>
				<h2>echo com aspas duplas:</h2>
				<?PHP
					echo "<p>Estudar $linguagemProgramacao é muito legal!!</p>"			
				?>
				<br/>
				<h1>Print no PHP</h1>
				<?PHP
					$faculdade = "Uniasselvi";
				?>
				<h2>Print com aspas simples e duplas:</h2>
				<?PHP
					print 'Estudar na $faculdade é muito legal! (simples)<br>';
					print "Estudar na $faculdade é muito legal! (duplas)";
				?>

				<br>
				<h1>Manipulação de Strings</h1>
				<h2>Tirando Espaços: trim(), ltrim(), rtrim()</h2>
				<!--
				• trim (): remove os espaços em branco em volta da string.
				• ltrim(): remove os espaços em branco à esquerda da string.
				• rtrim(): remove os espaços em branco à direita da string. 
				-->
				<?PHP
					$stringcomespacosemvolta = "   três espaços de cada lado   ";
					print "{".$stringcomespacosemvolta."}<br>";

					$stringsemespacosemvolta = trim($stringcomespacosemvolta);
					print "Com trim(): {".$stringsemespacosemvolta."}<br>";

					$stringsemespacosemvolta = ltrim($stringcomespacosemvolta);
					print "Com ltrim(): {".$stringsemespacosemvolta."}<br>";

					$stringsemespacosemvolta = rtrim($stringcomespacosemvolta);
					print "Com rtrim(): {".$stringsemespacosemvolta."}<br>";
				?>
				<br>
				<h2>Invertendo Strings: strrev()</h2>
				<?PHP
					$stringnormal = 'BAKEMONOGATARI';
					$stringinvertida = strrev($stringnormal);
					print "String normal: $stringnormal <br>";
					print "String invertida com strrev(): $stringinvertida <br>";
				?>
				<br>
				<h2>Transformando strings em maiúsculas e minúsculas: strtolower(), strtoupper(), ucfirst()</h2>
				<?PHP
					$stringMM = 'i will BACK';
					print "String normal: $stringMM<br>";

					$stringMU = strtoupper($stringMM);
					print "String com a função strtoupper(): $stringMU<br>";

					$stringML = strtolower($stringMM);
					print "String com a função strtolower(): $stringML<br>";

					$stringUF = ucfirst($stringMM);
					print "String com a função ucfirst(): $stringUF";
				?>

				<br>
				<h2>Substituindo strings com str_replace()</h2>
				<?PHP
					$textoriginal = 'My name is Gabriel';
					print "Este é o texto original: $textoriginal<br>";
					$textoalterado = str_replace("Gabriel","Leirbag",$textoriginal);
					print("Este é o texto alterado com str_replace(): $textoalterado");
				?>

				<br>
				<h2>Obtendo o tamanho das strings com strlen()</h2>
				<?php
					$nomeanime = 'Watashi Ga Motenai no wa Dou Kangaetemo Omaera Ga Warui!';
					$tamanhodaString = strlen($nomeanime);
					print "O nome do anime '$nomeanime' tem $tamanhodaString letras";

				?>
				<br>

				<h1>Redirecionamento de páginas</h1>
				<h2>Redirecionando usando header()</h2>
				<?php
					print 'header("location: <u>link do site</u>")<br>';
				?>

				
	</body>
</html>