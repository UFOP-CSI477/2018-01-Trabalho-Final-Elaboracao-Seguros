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

		include 'view/funcionario/areaFuncionario.php';

	}

	else if($op == 8){ //Direciona para lista de Solicitações aprovadas

		$solicitacaoController = new SolicitacoesController();
		$solicitacaoController->listarAprovados();

	}

	else if($op == 9){ //Direciona para lista de Solicitações rejeitados

		$solicitacaoController = new SolicitacoesController();
		$solicitacaoController->listarRejeitados();

	}

	else if($op == 10){ //Direciona para tela de Funcionário

		include 'view/funcionario/areaFuncionario.php';
	}

	else if($op == 11){ //Direciona para lista de Clientes

		$clienteController = new ClientesController();
		$clienteController->listar();
	}

	else if($op == 12){ //Direciona para tela de cadastro de Veículo

		include 'view/veiculo/areaVeiculo.php';
	}

	else if($op == 13){ //Cadastra Veículo

		$veiculoController = new VeiculosController();
		$veiculoController->cadastrar($_POST);

		include 'view/veiculo/areaVeiculo.php';
	}

	else if($op == 14){ //Direciona para tela inicial

		include 'index.php';
	}

 ?>