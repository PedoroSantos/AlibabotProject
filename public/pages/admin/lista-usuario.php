<?php
include ("../../../server/check-admin.php");
include ("../../../server/conexao.php");
include ("../../../server/banco-dados.php");
?>

<html>
	<head>
	<meta charset="UTF-8">
	<title>Lista de Funcionários</title>
	</head>
	<body>
		<h1>Funcionários Cadastrados</h1>
		<h2>Menus</h2>
		<a href="cadastro-usuarios.php">Novo cadastro</a>
		<table>
			<tr>
				<td>Alterar</td>
				<td>Excluir</td>
				<td>Id</td>
				<td>Nome</td>
				<td>Email</td>
			</tr>
			<?php
			$usuarios = listaBanco($conexao, "usuarios");
			foreach ($usuarios as $funcionario):
			?>
			<tr>
				<td><a href="alterar.php?idUsuario=<?php echo $funcionario['idUsuario']?>">Alterar</td>
				<td><a href="excluir.php?idUsuario=<?php echo $funcionario['idUsuario']?>">Excluir</td>
				<td><?php echo $funcionario['idUsuario']?></td>
				<td><?php echo $funcionario['nome']?></td>
				<td><?php echo $funcionario['email']?></td>
			</tr>
			<?php 
			endforeach;
			?>
		</table>
	</body>
</html>