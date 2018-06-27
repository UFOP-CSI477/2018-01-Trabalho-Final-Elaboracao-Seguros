<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Novo Cliente</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>

	<h2 class="jumbotron text-center">Bem-vindo à Área de Cadastro</h2>

	<form action="router.php?op=4" method="post">
		<label>Nome</label>
		<input type="text" name="nome" required>
		<br>
		<label>E-mail</label>
		<input type="text" name="email" required>
		<br>
		<label>CPF</label>
		<input type="text" name="cpf" required placeholder="XXX.XXX.XXX-XX">
		<br>
		<label>Senha</label>
		<input type="password" name="senha" required>
		<br>

		<input type="submit" class="btn btn-success" name="prosseguir" value="Prosseguir">
	</form>

</body>
</html>