<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Solicitações Rejeitados</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>

	<h2 class="jumbotron text-center">Lista de Procedimentos Rejeitados</h2>

	<table class="table table-bordered table-striped table-hover table-condensed">

		<tr>
			<th>ID</th>
			<th>PLACA</th>
			<th>ID DO CLIENTE</th>
			<th>ID DO VEÍCULO</th>
		</tr>

		<?php foreach( $lista as $linha ): ?>
			<tr>
				<td><?= $linha['id'] ?></td>
				<td><?= $linha['placa'] ?></td>
				<td><?= $linha['cliente_id'] ?></td>
				<td><?= $linha['veiculo_id'] ?></td>
			</tr>
		<?php endforeach ?>

	</table>

	<center>
		<a href="router.php?op=10"><button class="btn btn-success">Voltar</button></a>
	</center>

</body>
</html>