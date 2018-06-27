<!DOCTYPE html>
<html>
<head>
	<title>Login de Funcionário</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
	<h2 class="jumbotron text-center">Login de Funcionário</h2>

	<center>
		<form action="router.php?op=5" method="post">
			<label>Login</label>
			<input type="text" name="login">
			<br>
			<label>Senha</label>
			<input type="password" name="senha">
			<br>

			<input type="submit" class="btn btn-success" name="prosseguir" value="Prosseguir">
		</form>
	</center>

</body>
</html>