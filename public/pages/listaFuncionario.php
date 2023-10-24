<?php
include ("conexao.php");
include ("banco-cliente.php");
?>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Lista de Clientes</title>
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
				<td>Area</td>
			</tr>
			<?php
			$funcionarios = listaBanco($conexao, "usuario");
			foreach ($funcionarios as $funcionario):
			?>
			<tr>
				<td><a href="alterar.php?idClientes=<?php echo $funcionario['idFuncionario']?>">Alterar</td>
				<td><a href="excluir.php?idClientes=<?php echo $funcionario['idFuncionario']?>">Excluir</td>
				<td><?php echo $funcionario['idFuncionario']?></td>
				<td><?php echo $funcionario['nomeFuncionario']?></td>
				<td><?php echo $funcionario['emailFuncionario']?></td>
				<td><?php echo $funcionario['senhaFuncionario']?></td>
				<td><?php echo $funcionario['areaFuncionario']?></td>
			</tr>
			<?php 
			endforeach;
			?>
		</table>
	</body>
</html>