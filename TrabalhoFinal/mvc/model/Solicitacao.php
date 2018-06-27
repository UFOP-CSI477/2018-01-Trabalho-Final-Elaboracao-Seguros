<?php
	
	namespace Model;
	use Model\Database;
	use PDO;

	class Solicitacao{

		protected $db = null;

		public function __construct(){
			$this->db = Database::getInstance()->getDB();
		}

		public function save($placa, $cliente_id, $veiculo_id, $aprovado){
			$sql = $sql = "INSERT INTO solicitacoes (placa, cliente_id, veiculo_id, aprovado)
			VALUES ('". $placa ."','". $cliente_id ."','". $veiculo_id ."', '". $aprovado ."')";

			$this->db->query($sql);
		}

		public function listaPendentes(){
			$sql = "SELECT id, placa, cliente_id, veiculo_id FROM solicitacoes 
					WHERE aprovado = '". 1 ."'";

			return $this->db->query($sql);
		}

		public function atualizar($id, $aprovado){
			$sql = "UPDATE solicitacoes
			SET aprovado = '$aprovado'
			WHERE id=$id";

			$this->db->query($sql);
		}

		public function aprovados(){
			$sql = "SELECT id, placa, cliente_id, veiculo_id FROM solicitacoes 
					WHERE aprovado = '". 2 ."'";

			return $this->db->query($sql);
		}

		public function rejeitados(){
			$sql = "SELECT id, placa, cliente_id, veiculo_id FROM solicitacoes 
					WHERE aprovado = '". 3 ."'";

			return $this->db->query($sql);
		}
	}

?>