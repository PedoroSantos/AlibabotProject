<?php 
    include("../../../server/excluir-cliente-proc.php");
    include ("../../../server/check-admin.php");
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
    
    <!--cADICIONAR LISTA TABELA NO FORM ABAIXO QUANDO FOR TERMINADO. -->
    <form method="post" action=LISTA TABELA">
        <input type="hidden" name="idCliente" value="<?php echo $cliente["idClientes"] ?>"> <br>
        <input type="submit" value="Excluir" name="btnExcluir"> <br>
    </body>

</html>