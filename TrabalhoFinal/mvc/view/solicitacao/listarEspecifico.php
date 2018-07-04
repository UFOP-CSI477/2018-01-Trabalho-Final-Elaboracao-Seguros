<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área do Cliente</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>

	<!-- DAQUI -->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="#"> Olá, <?= $_SESSION['nome'] ?> </a>
				</div>

				<ul class="nav navbar-nav">
					<li><a href="router.php?op=16">Home</a></li>
					<li class="active"><a href="#">Operações: <span class="sr-only">(current)</span></a></li>
					<li><a href="router.php?op=17">Editar Perfil</a></li>
					<li><a href="router.php?op=15">Listar minhas requisições</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<a href="router.php?op=14"><button class="btn navbar-btn">Sair</button></a>
				</ul>

		</nav>

		<!-- ATÉ AQUI -->

		<br><br><br><br>

	<h3 class="text-center">Solicitações Pendentes</h3><br>

	<table class="table table-bordered table-striped table-hover table-condensed">

		<tr>
			<th>CÓDIGO</th>
			<th>PLACA</th>
			<th>CÓDIGO DO VEÍCULO</th>
		</tr>

		<?php foreach( $listaPendente as $linha ): ?>
			<tr>
				<td><?= $linha['id'] ?></td>
				<td><?= $linha['placa'] ?></td>
				<td><?= $linha['veiculo_id'] ?></td>
			</tr>
		<?php endforeach ?>

	</table>

	<br><h3 class="text-center">Solicitações Aprovadas</h3><br>

	<table class="table table-bordered table-striped table-hover table-condensed">

		<tr>
			<th>CÓDIGO</th>
			<th>PLACA</th>
			<th>CÓDIGO DO VEÍCULO</th>
		</tr>

		<?php foreach( $listaAprovada as $linha ): ?>
			<tr>
				<td><?= $linha['id'] ?></td>
				<td><?= $linha['placa'] ?></td>
				<td><?= $linha['veiculo_id'] ?></td>
			</tr>
		<?php endforeach ?>

	</table>

	<br><h3 class="text-center">Solicitações Rejeitadas</h3><br>

	<table class="table table-bordered table-striped table-hover table-condensed">

		<tr>
			<th>CÓDIGO</th>
			<th>PLACA</th>
			<th>CÓDIGO DO VEÍCULO</th>
		</tr>

		<?php foreach( $listaRejeitada as $linha ): ?>
			<tr>
				<td><?= $linha['id'] ?></td>
				<td><?= $linha['placa'] ?></td>
				<td><?= $linha['veiculo_id'] ?></td>
			</tr>
		<?php endforeach ?>

	</table>

</body>
</html>