<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área do Veículo</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
		<h2 class="jumbotron text-center">Bem-vindo à Área de Cadastro de Veículo</h2>

		<center>
			<form action="router.php?op=13" method="post">
				<label>Marca: </label>
				<input type="text" name="marca" required><br>
				<label>Modelo: </label>
				<input type="text" name="modelo" required><br>
				<label>FIPE: </label>
				<input type="text" name="fipe" required><br>
				<label>Ano: </label>
				<input type="text" name="ano" required><br>

				<input type="submit" class="btn btn-success" name="cadastrar" value="Cadastrar">
			</form>

			<br><br>
			<a href="router.php?op=10"><button class="btn btn-info">Voltar</button></a>
		</center>

</body>
</html>