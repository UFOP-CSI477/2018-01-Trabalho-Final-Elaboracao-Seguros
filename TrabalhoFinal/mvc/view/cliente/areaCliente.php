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

				<ul class="nav navbar-nav navbar-right">
					<a href="router.php?op=14"><button class="btn navbar-btn">Sair</button></a>
				</ul>

		</nav>

		<!-- ATÉ AQUI -->

		<br><br><br><br>

		<center>
			<h3>Cadastro de Solicitação de Seguro</h3>
			<br>
			<form action="router.php?op=6" method="post">
				<select name="id" id="id" required>
					<option value="">Selecione seu veículo:</option>
					<?php 
					use Model\Veiculo;

					$veiculo = new Veiculo();
					$listado = $veiculo->todos();
					var_dump($listado);

					foreach($listado as $linha):?>
						<option value=" <?= $linha['id'] ?> "> Marca: <?= $linha['marca'] ?>  |  Modelo: <?= $linha['modelo'] ?>  |  Ano: <?= $linha['ano'] ?></option>

					<?php endforeach ?>	
				</select>
				<br>
				<br>

				<label>Digite a placa: </label>
				<input type="text" name="placa" placeholder="XXX-XXXX">
				<br><br>

				<input type="submit" class="btn btn-success" name="prosseguir" value="Prosseguir">
			</form>
		</center>

</body>
</html>