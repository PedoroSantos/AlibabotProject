<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Versões</title>
</head>

<body>
    <h1>Versões</h1>
    <script>
        function download(ver) {
            window.location.href = `../sources/downloads/file-test-${ver}.exe`;
        }
    </script>
</body>

</html>

<?php
$versoes = [null, '0.1','0.2'];
for ($i = 1; $i <= sizeof($versoes) - 1; $i++) {
    echo "<div><h3>Versão: $versoes[$i] </h3> <button onclick='download($i)'>Baixar</button></div>";
};

?>