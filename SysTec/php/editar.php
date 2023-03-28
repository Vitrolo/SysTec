<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "banco_systec";
// conectar ao banco de dados
$conn = mysqli_connect($host, $username, $password, $dbname);

// verificar se o formulário foi enviado
if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];

    // buscar as informações do produto no banco de dados
    $sql = "SELECT * FROM pecas WHERE codigo = $codigo";
    $result = mysqli_query($conn, $sql);
    $produto = mysqli_fetch_assoc($result);
} else {
    echo "Código do produto não especificado.";
}

// fechar a conexão com o banco de dados
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/editar.css">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="../validar/editar_validar.php" method="post">
        <input type="hidden" name="codigo" value="<?php echo $produto['codigo']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $produto['nome']; ?>"><br>
        <label for="fabricante">Fabricante:</label>
        <input type="text" name="fabricante" value="<?php echo $produto['fabricante']; ?>"><br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao"><?php echo $produto['descricao']; ?></textarea><br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" value="<?php echo $produto['quantidade']; ?>"><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>