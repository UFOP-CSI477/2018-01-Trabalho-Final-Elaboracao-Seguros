<?php
	
	namespace Model;

	class Cliente{

		$db = null;
		$db = Database::getInstance()->getDB();

		public function validar($request){

			$email = $request['nome'];
			$senha = $request['senha'];

			$sql = "SELECT * FROM clientes WHERE email = '". $email ."' AND senha = '". $senha ."' ";


		}

	}

?>