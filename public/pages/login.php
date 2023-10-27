<?php

include("conexao-alibabot.php");
include("banco-usuario-alibabot.php");

$idUsuario = $_GET["idUsuario"];
$Usuario = buscarUsuario($conexao, $idUsuario);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Autenticar Usuario </title>
    </head>
    <body>
    <h1> Autenticar Usuario </h1>
    <form method="post" action="verifica-alteracao.php">
        <input type="hidden" name="idUsuario" value="<?php echo $Usuario["idUsuario"] ?>"> <br>
        Nome: <input type="text" name="nome" value="<?php echo $Usuario["nome"] ?>"> <br>
        Email: <input type="text" name="email" value="<?php echo $Usuario["email"] ?>"> <br>
        Senha: <input type="text" name="senha" value="<?php echo $Usuario["senha"] ?>"> <br>
        <input type="submit" value="autenticar" name="Autenticar"> <br>
    </body>
</html>

<?php

$email= $_POST['email'];
$senha= $_POST['senha'];

?>