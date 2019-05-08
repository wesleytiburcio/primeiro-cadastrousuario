<?php 

require_once 'conexao.php';

class Crud extends Conexao {

	protected $tabela = 'usuarios';	

	public function selectAll() {
		$sql = "SELECT * FROM $this->tabela ORDER BY nome";
		$res = Conexao::prepare($sql);
		$res->execute();

		return $res->fetchAll();
	}

	public function selectUnit($id) {
		$sql = "SELECT * FROM $this->tabela WHERE id = :id";
		$res = Conexao::prepare($sql);
		$res->bindParam(':id', $id, PDO::PARAM_INT);

		$res->execute();
		return $res->fetch();
	}

	public function inserir() {
		$sql = "INSERT INTO $this->tabela(nome, email) VALUES(:n, :e)";
		$res = Conexao::prepare($sql);

		$res->bindValue(':n', $this->nome);
		$res->bindValue(':e', $this->email);

		$res->execute();

		return $res;
	}

	public function update($id, $nome, $email) {
		$sql  = "UPDATE $this->tabela SET nome = :nome, email = :email WHERE id = :id";

		$res = Conexao::prepare($sql);
		
		$res->bindParam(':id', $id, PDO::PARAM_INT);
		$res->bindValue(':nome', $this->nome);
		$res->bindValue(':email', $this->email);		
		
		$res->execute();
		return $res;
	}

	// public function update($id, $nome, $email) {
	// 	$sql = "UPDATE $this->tabela SET nome=:n, email=:e WHERE id = :id ";
	// 	$res = Conexao::prepare($sql);

	// 	$res->bindParam(':id', $id, PDO::PARAM_INT);
	// 	$res->bindValue(':n', $this->nome);
	// 	$res->bindValue(':e', $this->email);

	// 	$res->execute();
	// 	return $res;
	// }

	public function deletar($id) {
		$sql = "DELETE FROM $this->tabela WHERE id = :id";
		$res = Conexao::prepare($sql);
		$res->bindValue(':id', $id, PDO::PARAM_INT);

		$res->execute();

		return $res;
	}
}

?>