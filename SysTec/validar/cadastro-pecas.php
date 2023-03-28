<?php
   include_once "../conexao/db.php";

   $Nome = $_POST["nome"];
   $Fabricante = $_POST["fabricante"];
   $Descricao = $_POST["descricao"];
   $Quantidade = $_POST["quantidade"];

   $sql = "INSERT INTO pecas (nome, fabricante, descricao, quantidade) VALUES ('{$Nome}', '{$Fabricante}', '{$Descricao}', '{$Quantidade}')";
   $enviar = $conn -> query($sql);

   if ($enviar == true) {
       print"<script> alert('Cadastro concluido com sucesso!!!');</script>";
       print"<script> location.href='../php/listar.php';</script>";
   }
   else {
    print"<script> location.href='../index.php';</script>";
    print"<script> alert('Erro ao cadastrar usuario')</script>";
   }

   mysqli_close($conn);
?>