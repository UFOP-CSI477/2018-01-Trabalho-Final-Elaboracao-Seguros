<?php 

	include 'controller/ClientesController.php';



	use Controller\ClientesController;



	$op = $_GET['op'];
	
	if($op == 1){ //Direcionar para o cadastro de cliente


		include 'view/cliente/cadastroCliente.php';

	} else if($op == 2){ //Direcionar para área do cliente

		$clienteController = new ClientesController();
		$clienteController->validar($_POST);

	} else if($op == 3){ //Direcionar para Login de Funcionário

	}

 ?>