<?php
	
	namespace Model;
	use Model\Database;
	use PDO;

	class Veiculo{

		protected $db = null;

		public function __construct(){
			$this->db = Database::getInstance()->getDB();
		}

		public function save($marca, $modelo, $fipe, $ano){
			$sql = "INSERT INTO veiculos (marca, modelo, fipe, ano)
			VALUES ('". $marca ."','". $modelo ."','". $fipe ."','". $ano ."')";

			$this->db->query($sql);
		}

		public function todos(){
			$sql ="SELECT * FROM veiculos ORDER BY marca, modelo, ano";
			return $this->db->query($sql);
		}
	}

?>