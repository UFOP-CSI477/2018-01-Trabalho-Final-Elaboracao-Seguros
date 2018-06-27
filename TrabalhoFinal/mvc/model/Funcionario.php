<?php
	
	namespace Model;
	use Model\Database;
	use PDO;

	class Funcionario{

		protected $db = null;
		public $login;
		public $senha;

		public function __construct(){
			$this->db = Database::getInstance()->getDB();
		}

		public function __construct2($login, $senha){
			$this->db = Database::getInstance()->getDB();
			$this->login = $senha;
			$this->senha = $senha;
		}

		public function validar($request){

			$login = $request['login'];
			$senha = $request['senha'];

			$sql = "SELECT * FROM funcionarios WHERE login = '". $login ."' AND senha = '". $senha ."' ";

			$result = $this->db->query($sql);
     		$rows = $result->fetchAll(PDO::FETCH_ASSOC);

     		if( !empty($rows) ){
     			include 'view/funcionario/areaFuncionario.php';
     		}
     		else{
     			include 'view/funcionario/naoEncontrado.php';
     		}
		}
	}

?>