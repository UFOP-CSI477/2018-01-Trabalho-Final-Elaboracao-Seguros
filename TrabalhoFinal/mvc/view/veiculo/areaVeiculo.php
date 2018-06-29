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
			<form class="form-inline" action="router.php?op=13" method="post">
				<table>
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
					</tr>

					<tr>
						<td align="right"><label>MARCA: </label></td>
						<td><input class="form-control" type="text" name="marca" required><br></td>
					</tr>

					<tr>
						<td align="right"><label>MODELO: </label></td>
						<td><input class="form-control" type="text" name="modelo" required><br></td>
					</tr>

					<tr>
						<td align="right"><label>FIPE: </label></td>
						<td><input class="form-control" type="text" name="fipe" required><br></td>
					</tr>

					<tr>
						<td align="right"><label>ANO: </label></td>
						<td><input class="form-control" type="text" name="ano" required><br></td>
					</tr>
				</table>
				<br>
				<input type="submit" class="btn btn-success" name="cadastrar" value="Cadastrar">
			</form>

			<br><br>
			<a href="router.php?op=10"><button class="btn btn-info">Voltar</button></a>
		</center>

</body>
</html>