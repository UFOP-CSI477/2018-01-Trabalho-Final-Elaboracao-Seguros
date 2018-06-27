<?php 

	namespace Controller;

	class ClientesController{


		public function validar($request){

			$cliente = new Cliente();
			$cliente->validar($request);

			include 'view/cliente/areaCliente.php';

		}
	}


 ?>