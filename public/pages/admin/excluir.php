<?php 
    include("../../../server/excluir-proc.php");
    if(array_key_exists('btnExcluir', $_GET)) {
        echo "1";
        excluir($conexao, $cargo, $id);
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Excluir Cliente/Funcionário </title>        
    </head>
    <body>
    <h1> Deseja escluir o seguinte funcionário ou cliente?? </h1>
    <h2> Nome: <?php echo $cliente["nome"] ?> </h2>
    <h2> Email: <?php echo $cliente["email"] ?> </h2>

    <form method="get" action="excluir.php?<?php echo $idCargo, "=", $cliente[$idCargo] ?>">
        <input type="hidden" name="<?php echo $idCargo ?>" value="<?php echo $cliente[$idCargo] ?>"> <br>
        <input type="submit" value="Excluir" name="btnExcluir"> <br>
    </body>

</html>