<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "banco_systec";
// conectar ao banco de dados
$conn = mysqli_connect($host, $username, $password, $dbname);

if (isset($_POST['codigo']) && isset($_POST['nome']) && isset($_POST['fabricante']) && isset($_POST['descricao']) && isset($_POST['quantidade'])) {
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
} else {
    echo "<script> alert('Cadastro concluído com sucesso!!!');</script>";
    echo "<script> location.href='../php/listar.php';</script>";
}

$sql = "UPDATE pecas SET nome='$nome', fabricante='$fabricante', descricao='$descricao', quantidade=$quantidade WHERE codigo=$codigo";
if (mysqli_query($conn, $sql)) {
    echo "<script> location.href='../php/listar.php';</script>";
} else {
    echo "Erro ao atualizar produto: " . mysqli_error($conn);
}

mysqli_close($conn);
?>