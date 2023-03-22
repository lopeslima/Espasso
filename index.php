<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chocolate</title>
</head>
<body>
    <h1>lopez</h1>
    <?php
    echo"Julia Brunetti, Julia Lopes, Pedro Henrique, Kauê Silva";
    ?>
    <?php
    //variaveis da conexao do banco de dados
    $servidor="localhost";
    $usuario="id20491689_gomona";
    $senha="Julesca12345.";
    $nomedb="id20491689_bd";// nome do banco de dados que sera usado
    //cria a conexao com o banco de dados
    $conn= new mysqli ($servidor, $usuario, $senha, $nomedb);
    // checa a conexao
    if ($conn->connect_error) {
        die ("conexao falhou:".$conn->connect_error);
    }
    echo"conectado ao banco de dados"."<br>";
    ?>
</body>
</html>