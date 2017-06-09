<?php
class Categorias extends Conexao{

	protected $pdo;

	function __construct(){
		$this->pdo = parent::getDB();
	}

	public function find($_id){

		$find = $this->pdo->prepare("SELECT * FROM categorias WHERE id_categoria = ?");
		$find->bindValue(1, $_id);
		$find->execute();

		return parent::utf8ize($find->fetch());
	}

	public function findAll(){

		$findAll = $this->pdo->prepare("SELECT * FROM categorias");
		$findAll->execute();
		
		return parent::utf8ize($findAll->fetchAll());
	}
}
?>