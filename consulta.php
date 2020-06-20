<?php
    /*recebe a variável consulta*/
    include_once("conexao.php");
    $sql = "select * from cadastro";
    $consulta = mysqli_query($conexao,$sql);
    $registros = mysqli_num_rows($consulta);

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Consultas</title>
    <link rel="stylesheet" type="text/css" href="Cadastro.css" />
  </head>
  <body>
    <div class="container">
        <h2>Consultas</h2> <br>
        <?php
            /*Exibe todos os registros*/
            print "Existem $registros atendimentos cadastrados";

            /*Exibe todos os dados*/
            while($exibirRegistros = mysqli_fetch_array($consulta)){

                $codigo = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                $telefone = $exibirRegistros[2];
                $animal = $exibirRegistros[3];
                $mensagem = $exibirRegistros[4];

                print "<article>";
                    print "Código: $codigo <br>";
                    print "Nome: $nome <br>";
                    print "Telefone: $telefone <br>";
                    print "Animal: $animal <br>";
                    print "Motivo: $mensagem <br>";

                print "</article>";
                
            }
            mysqli_close($conexao);
        ?>
        <form method="post" action="Cadastro.php">
            <input type="submit" value="Voltar">
        </form>
    </div>
  </body>
</html>