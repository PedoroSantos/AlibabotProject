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
		<a href="cadastro-funcionarios.php">Novo cadastro</a>
		<table>
			<tr>
				<td>Alterar</td>
				<td>Excluir</td>
				<td>Id</td>
				<td>Nome</td>
				<td>Email</td>
				<td>Area</td>
			</tr>
			<?php
			$funcionarios = listaBanco($conexao, "Funcionarios");
			foreach ($funcionarios as $funcionario):
			?>
			<tr>
				<td><a href="alterar.php?idFuncionario=<?php echo $funcionario['idFuncionario']?>">Alterar</td>
				<td><a href="excluir.php?idFuncionario=<?php echo $funcionario['idFuncionario']?>">Excluir</td>
				<td><?php echo $funcionario['idFuncionario']?></td>
				<td><?php echo $funcionario['nome']?></td>
				<td><?php echo $funcionario['email']?></td>
				<td><?php echo $funcionario['areaFuncionario']?></td>
			</tr>
			<?php 
			endforeach;
			?>
		</table>
	</body>
</html>