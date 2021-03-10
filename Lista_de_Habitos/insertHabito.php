<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "tabela de hábitos";

$conexao = new mysqli($servidor, $usuario, $senha, $database);

if ($conexao -> connect_error){
    die("Falha na conexão: ".$connexao -> connect_error);
}

$nome = $_GET["nome"];
$sql = "INSERT INTO hábitos (nome, status) VALUES ('".$nome."', 'A' )";

if (!($conexao -> query($sql) === TRUE)) {
    $conexao -> close();
    die("Erro: ".$sql."<br>".$conexao -> error);
}
$conexao -> close();

header("Location: index.php");
?>