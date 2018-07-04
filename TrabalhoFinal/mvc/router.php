<?php 

	include './model/Database.php';

	include 'controller/VeiculosController.php';
	include './model/Veiculo.php';

	include 'controller/ClientesController.php';
	include './model/Cliente.php';

	include 'controller/FuncionariosController.php';
	include './model/Funcionario.php';

	include 'controller/SolicitacoesController.php';
	include './model/Solicitacao.php';

	use Controller\ClientesController;
	use Controller\FuncionariosController;
	use Controller\SolicitacoesController;
	use Controller\VeiculosController;

	$op = $_GET['op'];
	
	if($op == 1){ //Direcionar para o cadastro de cliente

		include 'view/cliente/cadastroCliente.php';

	} else if($op == 2){ //Direcionar para área do cliente

		$clienteController = new ClientesController();
		$clienteController->validar($_POST);

	} else if($op == 3){ //Direcionar para Login de Funcionário

		include 'view/funcionario/login.php';

	} else if($op == 4){ //Direcionar para Cadastro de Cliente

		$clienteController = new ClientesController();
		$clienteController->cadastrar($_POST);

		include 'index.php';

	} else if($op == 5){ //Direcionar para área de Funcionário

		$funcionarioController = new FuncionariosController();
		$funcionarioController->validar($_POST);

	} else if($op == 6){ //Realiza cadastro de cliente depois direciona pala tela de cliente

		$solicitacaoController = new SolicitacoesController();
		$solicitacaoController->cadastrar($_POST);

		include 'view/cliente/areaCliente.php';

	} else if($op == 7){ //Atualiza status da solicitação de pendente para aprovado ou rejeitado

		$solicitacaoController = new SolicitacoesController();
		$solicitacaoController->atualizar($_POST);

		header('location: ../TrabalhoFinal/router.php?op=10');
	}

	else if($op == 8){ //Direciona para lista de Solicitações aprovadas

		session_start();
    	$tipo = $_SESSION['tipo'];

    	if($tipo==2){
    		$solicitacaoController = new SolicitacoesController();
			$solicitacaoController->listarAprovados();
    	}
    	else{
    		include 'view/cliente/naoLogado.php';
    	}
	}

	else if($op == 9){ //Direciona para lista de Solicitações rejeitados

		session_start();
    	$tipo = $_SESSION['tipo'];

    	if($tipo==2){
    		$solicitacaoController = new SolicitacoesController();
			$solicitacaoController->listarRejeitados();
    	}
    	else{
    		include 'view/cliente/naoLogado.php';
    	}
	}

	else if($op == 10){ //Direciona para tela de Funcionário

		session_start();
    	$tipo = $_SESSION['tipo'];

    	if($tipo==2){
    		include 'view/funcionario/areaFuncionario.php';
    	}
    	else{
    		include 'view/cliente/naoLogado.php';
    	}
	}

	else if($op == 11){ //Direciona para lista de Clientes

		session_start();
    	$tipo = $_SESSION['tipo'];

    	if($tipo==2){
    		$clienteController = new ClientesController();
			$clienteController->listar();
    	}
    	else{
    		include 'view/cliente/naoLogado.php';
    	}
	}

	else if($op == 12){ //Direciona para tela de cadastro de Veículo

		session_start();
    	$tipo = $_SESSION['tipo'];

    	if($tipo==2){
    		include 'view/veiculo/areaVeiculo.php';
    	}
    	else{
    		include 'view/cliente/naoLogado.php';
    	}
	}

	else if($op == 13){ //Cadastra Veículo

		session_start();
    	$tipo = $_SESSION['tipo'];

    	if($tipo==2){
    		$veiculoController = new VeiculosController();
			$veiculoController->cadastrar($_POST);

			include 'view/veiculo/areaVeiculo.php';
    	}
    	else{
    		include 'view/cliente/naoLogado.php';
    	}
	}

	else if($op == 14){ //Direciona para tela inicial

		//session_destroy();
		include 'index.php';
	}

	else if($op == 15){ //Lista requisições de determinado cliente

		session_start();
		$cliente_id = $_SESSION['cliente_id'];

		$solicitacaoController = new SolicitacoesController();
		$solicitacaoController->listarEspecifico($cliente_id);
	}

	else if($op == 16){ //Direciona para área do cliente

		session_start();
		$tipo = $_SESSION['tipo'];

		if($tipo==1){
			include 'view/cliente/areaCliente.php';
		}
		else{
			include 'view/cliente/naoLogado.php';
		}
	}

	else if($op == 17){ //Direciona para edição do perfil do cliente

		session_start();
		$id = $_SESSION['cliente_id'];

		$clienteController = new ClientesController();
		$clienteController->editaPerfil($id);
	}

	else if($op == 18){ //Atualiza Cliente

		$clienteController = new ClientesController();
		$clienteController->atualiza($_POST);

		header('location: ../TrabalhoFinal/router.php?op=16');
	}

 ?>