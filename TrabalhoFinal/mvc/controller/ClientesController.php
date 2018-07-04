<?php 

	namespace Controller;
	use Model\Cliente;
	use Model\Database;
	use PDO;

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

		public function editaPerfil($id){
			
			$cliente = new Cliente();
			$inst = $cliente->buscar($id);

			foreach ($inst as $cli) {
				include 'view/cliente/editaPerfil.php';
			}
		}

		public function atualiza($request){
			$id = $request['id'];
			$nome = $request['nome'];
			$email = $request['email'];
			$cpf = $request['cpf'];
			$senha = $request['senha'];

			$cliente = new Cliente();
			$cliente->atualizar($id, $nome, $email, $cpf, $senha);
		}
	}


 ?>