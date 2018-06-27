<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área do Cliente</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
		<h1 class="jumbotron text-center">Bem-vindo à Área do Cliente</h1>

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