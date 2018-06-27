<?php 

	namespace Controller;
	use Model\Veiculo;

	class VeiculosController{


		public function cadastrar($request){
			$marca = $request['marca'];
			$modelo = $request['modelo'];
			$fipe = $request['fipe'];
			$ano = $request['ano'];

			$veiculo = new Veiculo();
			$veiculo->save($marca, $modelo, $fipe, $ano);
		}
	}


 ?>