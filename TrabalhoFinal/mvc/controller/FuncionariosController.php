<?php 

	namespace Controller;
	use Model\Funcionario;

	class FuncionariosController{


		public function validar($request){

			$funcionario = new Funcionario();
			$funcionario->validar($request);
		}
	}
 ?>