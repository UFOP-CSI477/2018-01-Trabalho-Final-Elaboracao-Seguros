<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Novo Cliente</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>

	<h2 class="jumbotron text-center">Bem-vindo à Área de Cadastro</h2>

	<center>
	<form class="form-inline" action="router.php?op=4" method="post">
		<label>Nome:</label>
		<input class="form-control" type="text" name="nome" required>
		<br><br>
		<label>E-mail:</label>
		<input class="form-control" type="text" name="email" required>
		<br><br>
		<label>CPF:</label>
		<input class="form-control" type="text" name="cpf" required placeholder="XXX.XXX.XXX-XX">
		<br><br>
		<label>Senha:</label>
		<input class="form-control" type="password" name="senha" required>
		<br><br>

		<input type="submit" class="btn btn-success" name="prosseguir" value="Prosseguir">
	</form>
	</center>
</body>
</html>