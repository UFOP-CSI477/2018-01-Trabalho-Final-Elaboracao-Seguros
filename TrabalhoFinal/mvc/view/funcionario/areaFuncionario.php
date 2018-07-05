<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área do Funcionário</title>
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

		<center><h3>Lista de Solicitações Pendentes</h3></center>

		<table class="table table-bordered table-striped table-hover table-condensed">

			<tr>
				<th>ID</th>
				<th>PLACA</th>
				<th>ID DO CLIENTE</th>
				<th>ID DO VEÍCULO</th>
			</tr>

			<?php
			use Model\Solicitacao;

			$solicitacao = new Solicitacao();
			$lista = $solicitacao->listaPendentes();

			foreach( $lista as $linha ): ?>
				<tr>
					<td><?= $linha['id'] ?></td>
					<td><?= $linha['placa'] ?></td>
					<td><?= $linha['cliente_id'] ?></td>
					<td><?= $linha['veiculo_id'] ?></td>
				</tr>
			<?php endforeach ?>

		</table>

		<center>
			<br>
			<h3>Gerenciar Solicitações Pendentes</h3>
			<form action="router.php?op=7" method="post">
					
				<select name="aprovado" id="aprovado" required>
					<option>Selecione a operação que deseja realizar</option> 

					<option value="2">Aprovar</option>
					<option value="3">Rejeitar</option>

				</select><br><br>

				<label>Digite o ID da solicitação: </label>
				<input type="text" name="id" id="id" required>

				<br><br>
				<input type="submit" class="btn btn-success" name="prosseguir" value="Prosseguir">
			</form>
		</center>
	</body>
</html>