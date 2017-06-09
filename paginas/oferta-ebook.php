<?php
	require "server/Ebooks.class.php";
	$Ebooks = new Ebooks();

	$ebook = $Ebooks->find($currencyEmpresa['ebook_header_blog']);
?>
<section class="oferta-ebook">
	<div class="container">
		<div class="row row-xs-flex-center">
			<div class="col-lg-9">
				<h2 class="font-secundary">E-book Grátis</h2>
				<h4><?php echo $ebook['titulo'] ?></h4>
				<a href="<?php echo URL::getBase() ?>lista-vip/<?php echo $ebook['id_ebook'] . '-' . URL::removeAcentos($ebook['titulo'], '_') ?>" class="btn btn-warning btn-lg">Quero baixar o meu e-book grátis!</a>
			</div>
			<div class="col-lg-3">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<img src="<?php echo $ebook['img'] ?>" alt="<?php echo $ebook['titulo'] ?>" title="<?php echo $ebook['titulo'] ?>" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>