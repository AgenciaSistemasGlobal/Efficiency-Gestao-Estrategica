<?php $postsTrhee = $Postagens->find3Firsts($currencyEmpresa['id']) ?>
<div id="sidebar-right">
	<?php if(!$modulo2): ?>
		<div class="panel panel-news">
			<div class="panel-body text-center">
				<div class="icone-news">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<h3><?php echo $newsletterContent['titulo'] ?></h3>
	            <p><?php echo $newsletterContent['texto'] ?></p>
			</div>
			<div class="panel-footer">
				<a href="<?php echo URL::getBase() ?>lista-vip" class="btn btn-white">Inscreva-se já!</a>
			</div>
		</div>
	<?php endif ?>
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading panel-headng-danger"><h4>Dicas de leitura</h4></div>
		<ul class="list-group">
			<?php foreach ($postsTrhee as $postTrhee): ?>
				<a href="<?php echo URL::getBase() ?>blog/<?php echo $postTrhee['id_categoria'] . '-' . URL::removeAcentos($postTrhee['nome'], '_') . '/' . $postTrhee['id_postagem'] . '-' . URL::removeAcentos($postTrhee['titulo'], '_') ?>" class="list-group-item">
					
					<!-- Imagem -->
					<img src="<?php echo $postTrhee['img'] ?>" alt="<?php echo $postTrhee['titulo'] ?>" title="<?php echo $postTrhee['titulo'] ?>" class="img-responsive">
					
					<!-- Titulo -->
					<h5><?php echo $postTrhee['titulo'] ?></h5>
					
					<!-- Views -->
					<span class="label label-default"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $postTrhee['views'] ?></span>

					<!-- Categoria -->
					<span class="label" style="background-color: <?php echo $postTrhee['cor'] ?>"><?php echo $postTrhee['nome'] ?></span>
				</a>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="panel panel-default categorias-sidebar">
		<!-- Default panel contents -->
		<div class="panel-heading panel-headng-danger"><h4>Categorias</h4></div>
		<nav class="list-group">
			<?php foreach ($categorias as $categoria): ?>
				<a href="<?php echo URL::getBase() ?>blog/<?php echo $categoria['id_categoria'] . '-' . URL::removeAcentos($categoria['nome'], '_') ?>" class="list-group-item" style="border-left-color: <?php echo $categoria['cor'] ?>"><?php echo $categoria['nome'] ?></a>
			<?php endforeach ?>
		</nav>
	</div>
</div>