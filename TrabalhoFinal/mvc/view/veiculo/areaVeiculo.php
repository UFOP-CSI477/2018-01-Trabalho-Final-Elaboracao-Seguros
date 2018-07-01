<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área do Veículo</title>
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