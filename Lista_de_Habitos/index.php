<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Lista de Hábitos</title>
</head>

<body>
    <div class="center">
    <h1>Lista de Hábitos</h1>
    <p>Cadastre aqui os hábitos que você tem que vencer para melhorar sua vida!</p>
    
    <?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "listadehabitos";

    $conexao = new mysqli($servidor, $usuario, $senha, $database);

    if ($conexao -> connect_error){
        die("Falha na conexão: ".$connexao -> connect_error);
    }

    $sql = " Select id "."    , nome"." FROM habitos "."Where status = 'A'";
    $resultado = $conexao ->query($sql);

    if ($resultado -> num_rows > 0) {
        
        ?>
    
        <br>
        <table class="center">
            <tbody>
                <?php
                while ($registro = $resultado -> fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $registro["nome"]; ?></td>
                            <td><a href="vencerHabito.php?id= <?php echo $registro["id"]; ?>">Vencer</a></td>
                            <td><a href="desistirHabito.php?id= <?php echo $registro["id"]; ?>">Desistir</a></td>
                        </tr>
                        <?php
                            }
                        ?>
            </tbody>

		</table>
    <p>Continue mudando sua vida!</p>
    <p>Cadastre mais hábitos!</p>
        <?php
        }else{
        ?>
        <p>Você não possui hábitos cadastrados</p>
        <p>Comece JÁ a mudar a sua vida </p>
            <?php
        }

        $conexao -> close();
        ?>
        <a href="novoHabito.php"> Cadastrar Hábitos</a>
    </div>

</body>
</html>