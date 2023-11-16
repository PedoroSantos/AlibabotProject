<?php
	include ("../../../server/check-admin.php");
	include ("../../../server/conexao.php");
	include ("../../../server/banco-dados.php");
?>

<html>
	<head>
	<meta charset="UTF-8">
	<title>Lista de Usuários</title>
	</head>
	<body>
		<h1>Usuários Cadastrados</h1>
		<h2>Menus</h2>
		<a href="../cadastro-usuarios.php">Novo cadastro</a>
		<table>
			<tr>
				<td>Alterar</td>
				<td>Excluir</td>
				<td>Id</td>
				<td>Nome</td>
				<td>Email</td>
			</tr>
			<?php
			$usuarios = listaBanco($conexao, "Usuarios");
			foreach ($usuarios as $usuario):
			?>
			<tr>
				<td><a href="alterar.php?idUsuario=<?php echo $usuario['idUsuario']?>">Alterar</td>
				<td><a href="excluir.php?idUsuario=<?php echo $usuario['idUsuario']?>">Excluir</td>
				<td><?php echo $usuario['idUsuario']?></td>
				<td><?php echo $usuario['nome']?></td>
				<td><?php echo $usuario['email']?></td>
			</tr>
			<?php 
			endforeach;
			?>
		</table>
	</body>
</html>