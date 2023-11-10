<?php
include ("conexao.php");
include ("banco-cliente.php");
?>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Lista de versões</title>
	</head>
	<body>
		<h1>Versões Registradas</h1>
		<h2>Menus</h2>
		<a href="versões.php">Adicionar nova Versão</a>
		<table>
			<tr>
				<td>Alterar</td>
				<td>Excluir</td>
				<td>Id</td>
                <td>Tamanho</td>
                <td>Versão</td>
			</tr>
			<?php
			$versoes = listaBanco($conexao, "APP");
			foreach ($versoes as $versao):
			?>
			<tr>
				<td><a href="alterar.php?idClientes=<?php echo $versao['idAPP']?>">Alterar</td>
				<td><a href="excluir.php?idClientes=<?php echo $versao['idAPP']?>">Excluir</td>
				<td><?php echo $versao['idAPP']?></td>
				<td><?php echo $versao['versaoAPP']?></td>
				<td><?php echo $versao['tamanhoAPP']?></td>
			</tr>
			<?php 
			endforeach;
			?>
		</table>
	</body>
</html>