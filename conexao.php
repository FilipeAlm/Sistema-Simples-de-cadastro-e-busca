<?php
    /* Dados para a conexão com o bd */
    $hostname = "localhost";
    $user = "root";
    $password = "vertrigo";
    $database = "cadastro";
    /* cria a conexão com o bd */
    $conexao = mysqli_connect($hostname, $user, $password, $database);
        /* testa a conexão com o bd */
        if(!$conexao){
            print "falha na conexão com BD";
        }

?>