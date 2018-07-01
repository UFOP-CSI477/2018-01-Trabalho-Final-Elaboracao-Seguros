<?php
	
	namespace Model;
	use Model\Database;
	use PDO;

	class Cliente{

		protected $db = null;
		public $nome;
		public $email;
		public $cpf;
		public $senha;

		public function __construct(){
			$this->db = Database::getInstance()->getDB();
		}

		public function __construct2($nome, $email, $cpf, $senha){
			$this->db = Database::getInstance()->getDB();
			$this->nome = $nome;
			$this->email = $email;
			$this->cpf = $cpf;
			$this->senha = $senha;
		}

		public function validar($request){

			$email = $request['email'];
			$senha = $request['senha'];

			$sql = "SELECT * FROM clientes WHERE email = '". $email ."' AND senha = '". $senha ."' ";

			$result = $this->db->query($sql);
     		$rows = $result->fetchAll(PDO::FETCH_ASSOC);

     		if( !empty($rows) ){
     			foreach($rows as $output) {
     				session_start();
     				$_SESSION['cliente_id'] = $output['id'];
     				$_SESSION['tipo'] = 1;
     				$_SESSION['nome'] = $output['nome'];
     			}

     			include 'view/cliente/areaCliente.php';
     		}
     		else{
     			include 'view/cliente/naoEncontrado.php';
     		}
		}

		public function save($nome, $email, $cpf, $senha){
			$sql = $sql = "INSERT INTO clientes (nome, email, cpf, senha)
			VALUES ('". $nome ."','". $email ."','". $cpf ."','". $senha ."')";

			$this->db->query($sql);
		}

		public function listar(){
			$sql = "SELECT * FROM clientes";

			return $this->db->query($sql);
		}

	}

?>