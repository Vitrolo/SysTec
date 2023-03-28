<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listar.css">
    <title>Document</title>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banco_systec";

    // Criar conexão
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar conexão
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    // Selecionar registros
    $sql = "SELECT * FROM pecas";
    $result = mysqli_query($conn, $sql);

    // Exibir registros em uma tabela HTML
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "
        <tr>
            <section>
                <th>Código</th>
                <th>Nome</th>
                <th>Fabricante</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Deletar</th>
                <th>Editar</th>
            </section>
        </tr>
        ";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['codigo'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['fabricante'] . "</td>";
            echo "<td>" . $row['descricao'] . "</td>";
            echo "<td>" . $row['quantidade'] . "</td>";
            echo "<td><form action='deletar.php' method='post'><input type='hidden' name='codigo' value='" . $row['codigo'] . "'><button class='botao-deletar' type='submit'>Deletar</button></form></td>";
            echo "<td><form action='editar.php' method='post'><input type='hidden' name='codigo' value='" . $row['codigo'] . "'><button class='botao-editar' type='submit'>Editar</button></form></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "
        
        <div class='h1botao'>
            <div class='alinhar'>
                <h1>Não há registros para exibir.</h1>
            </div>
            <div class='botoes'>
                <button class='botao-inicio' type='submit' onclick=window.location.href='../index.php'> Voltar á Pagina Inicial  </button>
                <button class='botao-inicio' type='submit' onclick=window.location.href='../php/cadastrar-pecas.php'> Cadastrar uma Peça  </button>
            </div>
   
        </div>
        ";
    }

    mysqli_close($conn);
?>

</head>
<body>
    
</body>
</html>