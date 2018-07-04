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

		<center>
			<form class="form-inline" action="router.php?op=18" method="post">

				<input type="hidden" name="id" value="<?= $_SESSION['cliente_id'] ?>">
				
				<label>Nome: </label>
				<input class="form-control" type="text" name="nome" value="<?= $cli['nome'] ?>" required><br>

				<label>E-mail: </label>
				<input class="form-control" type="text" name="email" value="<?= $cli['email'] ?>" required><br>

				<label>CPF: </label>
				<input class="form-control" type="text" name="cpf" value="<?= $cli['cpf'] ?>" required><br>

				<label>Senha: </label>
				<input class="form-control" type="password" name="senha" required><br><br>

				<input class="btn btn-info" type="submit" name="confimar" value="Confimar">

			</form>
		</center>

</body>
</html>