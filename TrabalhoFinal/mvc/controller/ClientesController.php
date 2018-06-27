<?php 

	namespace Controller;
	use Model\Cliente;

	class ClientesController{


		public function validar($request){

			$cliente = new Cliente();
			$cliente->validar($request);
		}

		public function cadastrar($request){
			$nome = $request['nome'];
			$email = $request['email'];
			$cpf = $request['cpf'];
			$senha = $request['senha'];

			$cliente = new Cliente();
			$cliente->save($nome, $email, $cpf, $senha);
		}

		public function listar(){
			$cliente = new Cliente();
			$lista = $cliente->listar();

			include 'view/cliente/lista.php';
		}
	}


 ?>