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
    $usuario="id20540587_pedro";
    $senha="Computador10@";
    $nomedb="id20540587_lapiz";// nome do banco de dados que sera usado
    //cria a conexao com o banco de dados
    $conn= new mysqli ($servidor, $usuario, $senha, $nomedb);
    // checa a conexao
    if ($conn->connect_error) {
        die ("conexao falhou:".$conn->connect_error);
    }
    echo"conectado ao banco de dados"."<br>";
    $sql = "SELECT nome, sobrenome, telefone FROM Agenda";
    $resultado = $conn->query($sql);
    
    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            echo $linha["nome"] . " " . $linha["sobrenome"] . " - " . $linha["telefone"] . "<br>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }
    
    $conn->close();
   ?>
</body>
</html>