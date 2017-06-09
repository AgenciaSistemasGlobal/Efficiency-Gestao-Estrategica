<?php
class Newsletter extends Conexao{

	protected $pdo;

	function __construct(){
		$this->pdo = parent::getDB();
	}

	public function find($_empresa){

		$find = $this->pdo->prepare("SELECT * FROM newsletter WHERE empresa = ? LIMIT 1");
		$find->bindValue(1, $_empresa);
		$find->execute();

		return parent::utf8ize($find->fetch());
	}
}
?>