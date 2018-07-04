<!DOCTYPE html>
<html>
<head>
	<title>Login de Funcionário</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
	<h2 class="jumbotron text-center">Login de Funcionário</h2>

	<center>
		<form class="form-inline" action="router.php?op=5" method="post">
			<label>Login: </label>
			<input class="form-control" type="text" name="login" required>
			<br>
			<label>Senha: </label>
			<input class="form-control" type="password" name="senha" required>
			<br><br>

			<input type="submit" class="btn btn-success" name="prosseguir" value="Prosseguir">
		</form>
	</center>

</body>
</html>