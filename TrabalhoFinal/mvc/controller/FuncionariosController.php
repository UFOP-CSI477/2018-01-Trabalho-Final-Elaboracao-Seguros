<?php 

	namespace Controller;
	use Model\Funcionario;
	use Model\Database;
	use PDO;

	class FuncionariosController{


		public function validar($request){

			$funcionario = new Funcionario();
			$funcionario->validar($request);
		}
	}
 ?>