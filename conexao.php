<?php
//variaveis da conexao do banco de dados
    $servidor="localhost";
    $usuario="id20540587_pedro";
    $senha="Computador10@";
    $nomedb="id20540587_lapiz";// nome do banco de dados que sera usado
    //cria a conexao com o banco de dados
    $conn= new mysqli ($servidor, $usuario, $senha, $nomedb);
    // checa a conexao
    if ($conn->connect_error) {
        die ("conexao falhou:".$conn->connect_error);
       ?>