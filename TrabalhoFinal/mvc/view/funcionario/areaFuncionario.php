<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área do Funcionário</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
		<h2 class="jumbotron text-center">Bem-vindo à Área de Funcionário</h2>

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
					<option>Selecione a operação que deseja realizar: </option> 

					<option value="2">Aprovar</option>
					<option value="3">Rejeitar</option>

				</select><br><br>

				<label>Digite o ID da solicitação: </label>
				<input type="text" name="id" id="id" required>

				<br><br>
				<input type="submit" class="btn btn-success" name="prosseguir" value="Prosseguir">
			</form>
		</center>
		<br><br><br>
		<center>
			<a href="router.php?op=8"><button class="btn btn-info">Listar Procedimentos Aprovados</button></a>
			<a href="router.php?op=9"><button class="btn btn-info">Listar Procedimentos Rejeitados</button></a>
			<a href="router.php?op=11"><button class="btn btn-info">Listar Clientes Cadastrados</button></a>
			<br><br>
			<a href="router.php?op=12"><button class="btn btn-info">Cadastrar Novo Veículo</button></a>
		</center>

	</body>
</html>