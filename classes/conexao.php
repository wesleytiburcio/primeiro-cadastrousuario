<?php 
require_once 'config.php';

// class Conexao {
// 	private $pdo;

// 	public function ConexaoDB() {
// 		if (!isset($this->pdo)) {

// 			try {
// 				$this->pdo = new PDO("mysql:host=".HOST. ";dbname=".DB , USER, PASS);
// 				$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
// 				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
// 			} catch (PDOException $e) {
// 				echo "Erro no DB " .$e->getMessage();
				
// 			}

// 		}
// 		return $this->pdo;

// 	}

// 	public function prepare($sql) {
// 		return $this->ConexaoDB()->prepare($sql);
// 	}

// }

class Conexao {
	private static $pdo;

	public function ConexaoDB() {
		if (!isset(self::$pdo)) {

			try {
				self::$pdo = new PDO("mysql:host=".HOST. ";dbname=".DB , USER, PASS);
				self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				
			} catch (PDOException $e) {
				echo "Erro no Banco de Dados" .$e->getMessage();
			}		
		}

		return self::$pdo;
	}

	public function prepare($sql) {
		return self::ConexaoDB()->prepare($sql);
	}
		
}

?>