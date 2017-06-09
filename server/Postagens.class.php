<?php
class Postagens extends Conexao{

	protected $pdo;

	function __construct(){
		$this->pdo = parent::getDB();
	}

	public function find($_id, $_empresa){

		$find = $this->pdo->prepare("
			SELECT * 
			FROM postagens pstg
			INNER JOIN categorias ctgs
			ON pstg.categoria = ctgs.id_categoria
			WHERE pstg.id_postagem = ? AND pstg.empresa = ?
		");
		$find->bindValue(1, $_id);
		$find->bindValue(2, $_empresa);
		$find->execute();

		return parent::utf8ize($find->fetch());
	}

	public function findAll($_empresa){

		$findAll = $this->pdo->prepare("
			SELECT *
			FROM postagens pstg
			INNER JOIN categorias ctgs
			ON pstg.categoria = ctgs.id_categoria
			WHERE pstg.empresa = ?
		");
		$findAll->bindValue(1, $_empresa);
		$findAll->execute();

		return parent::utf8ize($findAll->fetchAll());
	}

	public function find3Firsts($_empresa){

		$findAll = $this->pdo->prepare("
			SELECT *
			FROM postagens pstg
			INNER JOIN categorias ctgs
			ON pstg.categoria = ctgs.id_categoria
			WHERE empresa = ?
			ORDER BY views DESC LIMIT 3
		");
		$findAll->bindValue(1, $_empresa);
		$findAll->execute();

		return parent::utf8ize($findAll->fetchAll());
	}

	public function findWhere($_empresa, $_like){

		$findAll = $this->pdo->prepare("
			SELECT *
			FROM postagens pstg
			INNER JOIN categorias ctgs
			ON pstg.categoria = ctgs.id_categoria
			WHERE empresa = ? AND pstg.titulo LIKE ?
		");
		$findAll->bindValue(1, $_empresa);
		$findAll->bindValue(2, "%$_like%", PDO::PARAM_STR);
		$findAll->execute();

		return parent::utf8ize($findAll->fetchAll());
	}

	public function findFirsts($_empresa){

		$findAll = $this->pdo->prepare("
			SELECT *
			FROM postagens pstg
			INNER JOIN categorias ctgs
			ON pstg.categoria = ctgs.id_categoria
			WHERE empresa = ?
			ORDER BY data DESC LIMIT 3
		");
		$findAll->bindValue(1, $_empresa);
		$findAll->execute();

		return parent::utf8ize($findAll->fetchAll());
	}

	public function findByCategoria($_empresa, $_categoria){

		$findAll = $this->pdo->prepare("
			SELECT *
			FROM postagens pstg
			INNER JOIN categorias ctgs
			ON pstg.categoria = ctgs.id_categoria
			WHERE empresa = ? AND ctgs.id_categoria = ?
		");
		$findAll->bindValue(1, $_empresa);
		$findAll->bindValue(2, $_categoria);
		$findAll->execute();

		return parent::utf8ize($findAll->fetchAll());
	}

	public function updateViews($_id) {
		
		$editar = $this->pdo->prepare("UPDATE postagens SET views = views + 1 WHERE id_postagem = ?");
		$editar->bindValue(1, $_id);
		$editar->execute();

		return $editar->rowCount();
	}
}
?>