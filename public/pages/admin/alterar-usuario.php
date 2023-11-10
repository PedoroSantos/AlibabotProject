<?php
    include("../../../server/cadastro_proc.php");
	include ("../../../server/check-admin.php");
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Alterar Usuario</title>
	</head>
	<body>
	<h1>Alterar Usuario</h1>
	<form method="post" action="verificaalteracao.php">
		<input type="hidden" name="idUsuario" value="<?php echo $usuario['idUsuario']?>"><br>
		Nome:<input type="text" name="nome" value="<?php echo $usuario['nome']?>"><br>
		Email:<input type="text" name="email" value="<?php echo $usuario['email']?>"><br>
		Idade:<input type="text" name="idade" value="<?php echo $usuario['idade']?>"><br>
		<input type="submit" value="Alterar" name="btnAlterar"><br>
	</form>
	</body>
</html>
