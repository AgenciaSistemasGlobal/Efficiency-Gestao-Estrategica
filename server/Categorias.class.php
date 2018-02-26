<?php
class Categorias extends Conexao{

	protected $pdo;

	public $empresa = 3;
	public $nome;
	public $cor;

	function __construct(){
		$this->pdo = parent::getDB();
	}

	public function find($_id){

		$find = $this->pdo->prepare("SELECT * FROM categorias WHERE id_categoria = ? AND empresa = ?");
		$find->bindValue(1, $_id);
		$find->bindValue(2, $this->empresa);
		$find->execute();

		return parent::utf8ize($find->fetch());
	}

	public function update($_id){

		$update = $this->pdo->prepare("UPDATE categorias SET nome = ?, cor = ? WHERE id_categoria = ?");
		$update->bindValue(1, $this->nome);
		$update->bindValue(2, $this->cor);
		$update->bindValue(3, $_id);
		$update->execute();

		return $update->rowCount();
	}

	public function delete($_id){
		$delete = $this->pdo->prepare("DELETE FROM categorias WHERE id_categoria = ?");
		$delete->bindValue(1, $_id);
		$delete->execute();
		return $delete->rowCount();
	}

	public function insert(){

		$insert = $this->pdo->prepare("INSERT INTO categorias (empresa, nome, cor) VALUES (?, ?, ?)");
		$insert->bindValue(1, $this->empresa);
		$insert->bindValue(2, $this->nome);
		$insert->bindValue(3, $this->cor);
		$insert->execute();

		return $this->pdo->lastInsertId();
	}

	public function findAll(){

		$findAll = $this->pdo->prepare("SELECT * FROM categorias WHERE empresa = ?");
		$findAll->bindValue(1, $this->empresa);
		$findAll->execute();
		
		return parent::utf8ize($findAll->fetchAll());
	}
}
?>