<?php
include ("conexao.php");
include ("banco-cliente.php");
?>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Lista de Usuario</title>
	</head>
	<body>
		<h1>Clientes Cadastrados</h1>
		<h2>Menus</h2>
		<a href="cadastro.php">Novo cadastro</a>
		<table>
			<tr>
				<td>Alterar</td>
				<td>Excluir</td>
				<td>Id</td>
				<td>Nome</td>
				<td>Email</td>
				<td>Senha</td>
				
			</tr>
			
			<?php
			$usuarios = listaBanco($conexao, "Usuario");
			foreach ($usuarios as $usuario):
			?>

			<tr>
				<td><a href="alterar.php?idClientes=<?php echo $usuario['idUsuarios']?>">Alterar</td>
				<td><a href="excluir.php?idClientes=<?php echo $usuario['idUsuarios']?>">Excluir</td>
				<td><?php echo $usuario['idUsuario']?></td>
				<td><?php echo $usuario['nomeUsuario']?></td>
				<td><?php echo $usuario['emailUsuario']?></td>
				<td><?php echo $usuario['senhaUsuario']?></td>
			</tr>
			<?php 
			endforeach;
			?>
		</table>
	</body>
</html>