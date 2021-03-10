<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "listadehabitos";

$conn = new mysqli($servidor, $usuario, $senha, $database);

if ($conn -> connect_error){
    die("Falha na conexão: ".$conn -> connect_error);
}

$id = $_GET["id"];
$sql = "UPDATE habitos SET status = 'V' WHERE id=".$id;

if (!($conn -> query($sql) === TRUE)) {
    $conn -> close();
    die("Erro ao atualizar: ".$conn->error);
}
$conn->close();
header("Location: index.php");
?>