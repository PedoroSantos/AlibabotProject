<?php //Conexao banco de dados
$host = "localhost:3306";
$usuario = "root";
$senha = "";
$banco = "Alibabot";

try {
    $conexao = mysqli_connect($host, $usuario, $senha, $banco);
    return $conexao;
} catch (Exception $e) {
    die("erro: ". mysqli_connect_error());
}

?>