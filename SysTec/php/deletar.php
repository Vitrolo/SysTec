<?php
// Conecta ao banco de dados

$host = "localhost";
$username = "root";
$password = "";
$dbname = "banco_systec";

$conn = mysqli_connect($host, $username, $password, $dbname);

  // Obtém o código do produto a ser deletado
$codigo = $_POST["codigo"];

  // Executa a consulta SQL para deletar o produto
$sql = "DELETE FROM pecas WHERE codigo = $codigo";
mysqli_query($conn, $sql);

  // Redireciona de volta para a página de listagem
header("Location: listar.php");
exit;
?>