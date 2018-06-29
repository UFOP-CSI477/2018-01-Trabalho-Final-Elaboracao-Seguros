<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página Principal</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>

	<div align="right">
		<label>Acesso Administrativo</label>
		<br>
		<a href="router.php?op=3"><button class="btn btn-success">Login</button></a>

	</div>

	<center>

		<h1 class="jumbotron">FAÇA AGORA MESMO SUA COTAÇÃO</h1>

		<form action="router.php?op=2" method="post">
			<label>Insira seu e-mail: </label>
			<input class="form-control-plaintext" type="text" name="email" required>
			<br>
			<br>
			<label>Insira sua senha:</label>
			<input type="password" name="senha" required>
			<br>
			<br>
			<input type="submit" class="btn btn-success" name="prosseguir" value="Prosseguir">
			<br>
			<br>
			<a href="router.php?op=1">Não possui cadastro?</a>
			

		</form>
	</center>

</body>
</html>