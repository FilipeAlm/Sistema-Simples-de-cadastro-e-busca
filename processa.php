<?php
include_once("conexao.php");

    /*recebe as variáveis*/
    $nome = $_POST['fnome'];
    $telefone = $_POST['ftel'];
    $animal = $_POST ['fanimal'];
    $mensagem = $_POST ['fmensagem'];

    /*informa pro banco as variaveis e o destino do banco*/
    $sql = "insert into cadastro (nome, telefone, animal, mensagem) values ('$nome','$telefone','$animal','$mensagem')";
    $salvar = mysqli_query($conexao, $sql);
   
mysqli_close($conexao);
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="Cadastro.css" />
  </head>
  <body>
    <div class="container">
        <h2>Cadastro Confirmado</h2> <br>
        <form method="post" action="Cadastro.php">
            <input type="submit" value="Voltar">
        </form>
    </div>
  </body>
</html>