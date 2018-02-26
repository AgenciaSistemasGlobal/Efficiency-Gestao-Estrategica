<?php
class Empresa extends Conexao{

	protected $pdo;

	function __construct(){
		$this->pdo = parent::getDB();
	}

	public function find($_id){

		$find = $this->pdo->prepare("SELECT * FROM empresa WHERE id = ?");
		$find->bindValue(1, $_id);
		$find->execute();

		return parent::utf8ize($find->fetch());
	}
}
?>