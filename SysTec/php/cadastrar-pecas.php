<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastrar-pecar.css">
    <title>Document</title>
    <?php
        include_once "../conexao/db.php";
    ?>
</head>
<body>
    <div class="cadastrar-pecas">
        <div class="info">
            <form action="../validar/cadastro-pecas.php" method="post">
            <h1>Inserir Peças</h1>
                <div class="inputbox">
                    <label for=""> Nome </label>
                    <input type="text" name="nome" required>
                </div>
                <div class="inputbox">
                    <label for=""> Fabricante </label>
                    <input type="text" name="fabricante" required>
                </div>
                <div class="inputbox">
                    <label for=""> Descricao </label>
                    <input type="text" name="descricao" required>
                </div>
                <div class="inputbox">
                    <label for=""> Quantidade </label>  
                    <input type="int" name="quantidade" required> 
                </div>
                    <button class="botao" type="submit" name="botao"> Cadastrar Peças </button>
            </form>
        </div>
    </div>
</body>
</html>