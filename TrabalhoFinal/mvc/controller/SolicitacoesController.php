<?php 

	namespace Controller;
	use Model\Solicitacao;

	class SolicitacoesController{

		public function cadastrar($request){
			
			session_start();
			$cliente_id = $_SESSION['cliente_id'];
			$veiculo_id = $request['id'];
			$placa = $request['placa'];
			$aprovado = 1;

			$solicitacao = new Solicitacao();
			$solicitacao->save($placa, $cliente_id, $veiculo_id, $aprovado);
		}

		public function atualizar($request){

			if($request['aprovado']==2){
				$aprovado = 2;
			}
			else {
				$aprovado = 3;
			}

			$id = $request['id'];

			$solicitacao = new Solicitacao();
			$solicitacao->atualizar($id, $aprovado);
		}

		public function listarAprovados(){

			$solicitacao = new Solicitacao();
			$lista = $solicitacao->aprovados();

			include 'view/solicitacao/listaAprovados.php';
		}

		public function listarRejeitados(){

			$solicitacao = new Solicitacao();
			$lista = $solicitacao->rejeitados();

			include 'view/solicitacao/listaRejeitados.php';
		}

		public function listarEspecifico($cliente_id){
			
			$solicitacao = new Solicitacao();
			$listaPendente = $solicitacao->listarPendentes($cliente_id);
			$listaAprovada = $solicitacao->listarAprovadas($cliente_id);
			$listaRejeitada = $solicitacao->listarRejeitadas($cliente_id);

			include 'view/solicitacao/listarEspecifico.php';
		}
	
	}


 ?>