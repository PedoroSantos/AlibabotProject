<?php //Conexao banco de dados

function conectar_banco(){
    $host = "";
    $usuario = "";
    $senha = "";
    $banco = "";

    try {
        $conexao = mysqli_connect($host, $usuario, $senha, $banco);
        return $conexao;
    } catch (Exception $e) {
        return "erro: ". mysqli_connect_error();
    }
}

$conexao = conectar_banco();
echo $conexao 

?>