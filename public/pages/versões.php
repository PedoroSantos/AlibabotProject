<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Versões</title>
</head>
<body>
    <h1>Versões</h1>
</body>
</html>

<?php
$versoes = ['0.1','0.2'];
for ($i = 0;$i <= sizeof($versoes) - 1; $i++){
    echo "<div><h3>Versão $versoes[$i] </h3> <button>Baixar</button></div>";
};

?>