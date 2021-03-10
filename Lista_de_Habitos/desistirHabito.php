<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "listadehabitos";

$conn = new mysqli($servidor, $usuario, $senha, $database);

if ($conn -> connect_error){
    die("Falha na conexão: ".$connexao -> connect_error);
}

$id = $_GET["id"];
$sql = "DELETE FROM habitos WHERE id=".$id;

if (!($conn -> query($sql) === TRUE)) {
    $conn -> close();
    die("Erro ao excluir: ".$conn->error);
}
$conn->close();
header("Location: index.php");
?>