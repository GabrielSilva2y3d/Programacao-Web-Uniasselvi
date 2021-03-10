<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "tabela de hábitos";

$conexao = new mysqli($servidor, $usuario, $senha, $database);

if ($conexao -> connect_error){
    die("Falha na conexão: ".$connexao -> connect_error);
}

$id = $_GET["id"];
$sql = "DELETE FROM hábitos WHERE id=".$id;

if (!($conexao -> query($sql) === TRUE)) {
    $conexao -> close();
    die("Erro ao excluir: ".$conexao->error);
}
$conexao->close();
header("Location: index.php");
?>