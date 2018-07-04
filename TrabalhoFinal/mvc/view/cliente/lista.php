<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Clientes Cadastrados</title>
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

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="router.php?op=10">Home</a></li>
						<li class="active"><a href="#">Operações: <span class="sr-only">(current)</span></a></li>
						<li><a href="router.php?op=8">Listar Procedimentos Aprovados</a></li>
						<li><a href="router.php?op=9">Listar Procedimentos Rejeitados</a></li>
						<li><a href="router.php?op=11">Listar Clientes Cadastrados</a></li>
						<li><a href="router.php?op=12">Cadastrar Novo Veículo</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<a href="router.php?op=14"><button class="btn navbar-btn">Sair</button></a>
					</ul>

		</nav>

		<!-- ATÉ AQUI -->

	<br><br><br><br>

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

</body>
</html>