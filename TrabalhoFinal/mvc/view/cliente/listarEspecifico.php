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
					<li class="active"><a href="#">Operações: <span class="sr-only">(current)</span></a></li>
					<li><a href="router.php?op=15">Listar minhas requisições</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<a href="router.php?op=14"><button class="btn navbar-btn">Sair</button></a>
				</ul>

		</nav>

		<!-- ATÉ AQUI -->

		<br><br><br><br>

	<table class="table table-bordered table-striped table-hover table-condensed">

		<tr>
			<th>CÓDIGO</th>
			<th>PLACA</th>
			<th>CÓDIGO DO VEÍCULO</th>
			<th>STATUS</th>
		</tr>

		<?php foreach( $lista as $linha ): ?>
			<tr>
				<td><?= $linha['id'] ?></td>
				<td><?= $linha['placa'] ?></td>
				<td><?= $linha['veiculo_id'] ?></td>
				<td><?= $linha['aprovado'] ?></td>
			</tr>
		<?php endforeach ?>

	</table>

</body>
</html>