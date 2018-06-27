<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Clientes Cadastrados</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>

	<h2 class="jumbotron text-center">Lista de Clientes Cadastrados</h2>

	<table class="table table-bordered table-striped table-hover table-condensed">

		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>E-MAIL</th>
			<th>CPF</th>
		</tr>

		<?php foreach( $lista as $linha ): ?>
			<tr>
				<td><?= $linha['id'] ?></td>
				<td><?= $linha['nome'] ?></td>
				<td><?= $linha['email'] ?></td>
				<td><?= $linha['cpf'] ?></td>
			</tr>
		<?php endforeach ?>

	</table>

	<center>
		<a href="router.php?op=10"><button class="btn btn-success">Voltar</button></a>
	</center>

</body>
</html>