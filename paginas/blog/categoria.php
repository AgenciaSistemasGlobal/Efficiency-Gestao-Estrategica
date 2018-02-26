<?php
	$postagensByCategoria = $Postagens->findByCategoria($currencyEmpresa['id'], $categoria['id_categoria']);
?>
<section class="categorias-blog">
	<div class="container">
		<!-- Breadcrumb -->
		<div class="scp-breadcrumb">
		    <ul class="breadcrumb">
		        <li><a href="<?php echo URL::getBase() ?>blog">Blog</a></li>
		        <li class="active"><?php echo $categoria['nome'] ?></li>
		    </ul>
		</div>
		<div class="row">
			<div class="col-lg-9 col-md-9">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-body panel-cores-categorias" style="background-color: <?php echo $categoria['cor'] ?>">
							<h1><?php echo count($postagensByCategoria) ?> postagens sobre <strong><?php echo $categoria['nome'] ?></strong></h1>
						</div>
					</div>
				</div>
				<div class="row">
					<?php foreach ($postagensByCategoria as $postByCat): ?>
						<div class="col-lg-4 posts-bycat">
							<a href="<?php echo URL::getBase() ?>blog/<?php echo $postByCat['id_categoria'] . '-' . URL::removeAcentos($postByCat['nome'], '_') . '/' . $postByCat['id_postagem'] . '-' . URL::removeAcentos($postByCat['titulo'], '_') ?>" class="list-group-item">
									<img src="<?php echo $postByCat['img'] ?>" alt="<?php echo $postByCat['titulo'] ?>" title="<?php echo $postByCat['titulo'] ?>" class="img-responsive">
									<h5 class="titulo-post-by-cat"><?php echo $postByCat['titulo'] ?></h5>
									<span class="label label-default"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $postByCat['views'] ?></span>
							</a>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<?php require "sidebar-right.php" ?>
			</div>
		</div>
	</div>
</section>