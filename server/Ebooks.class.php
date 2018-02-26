<?php
class Ebooks extends Conexao{

	protected $pdo;

	function __construct(){
		$this->pdo = parent::getDB();
	}

	public function find($_id, $_empresa){

		$find = $this->pdo->prepare("
			SELECT * 
			FROM ebooks
			WHERE id_ebook = ? AND empresa = ?
		");
		$find->bindValue(1, $_id);
		$find->bindValue(2, $_empresa);
		$find->execute();

		return parent::utf8ize($find->fetch());
	}

	public function findAll($_empresa){

		$findAll = $this->pdo->prepare("
			SELECT *
			FROM ebooks
			WHERE empresa = ?
		");
		$findAll->bindValue(1, $_empresa);
		$findAll->execute();

		return parent::utf8ize($findAll->fetchAll());
	}
}
?>