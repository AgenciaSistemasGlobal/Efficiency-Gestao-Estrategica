<?php
	$idPost = URL::getIdUri($modulo2);

	// Update Views
	$Postagens->updateViews($idPost);
	
	$postagem = $Postagens->find($idPost, $currencyEmpresa['id']);
?>
<section class="post-unico-blog">
	<div class="container">
		<!-- Breadcrumb -->
		<div class="scp-breadcrumb">
		    <ul class="breadcrumb">
		        <li><a href="<?php echo URL::getBase() ?>blog">Blog</a></li>
		        <li><a href="<?php echo URL::getBase() ?>blog/<?php echo $postagem['id_categoria'] . '-' . URL::removeAcentos($postagem['nome'], '_') ?>"><?php echo $postagem['nome'] ?></a></li>
		        <li class="active"><?php echo $postagem['titulo'] ?></li>
		    </ul>
		</div>
		<div class="row">
			<div id="body-article" class="col-lg-9 col-md-9 cada-postagem panel panel-body">
				<header>
					<img class="img-responsive" src="<?php echo $postagem['img'] ?>" alt="<?php echo $postagem['titulo'] ?>" title="<?php echo $postagem['titulo'] ?>">
				</header>
				<h1><?php echo $postagem['titulo'] ?></h1>
				<!-- Autor / Views / Categoria -->
		        <ul class="list-inline infos-list-blog">
		        	<li>
		        		<p><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo substr($postagem['autor'], 0, 20); echo strlen($postagem['autor'])>20 ? "[...]" : "" ?></p>
		        	</li>
		        	<li>
		        		<p><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $postagem['views'] ?></p>
		        	</li>
		        	<li>
		        		<i class="fa fa-calendar" aria-hidden="true"></i>
                        <?php echo date("d/m/Y", strtotime($postagem['data'])) ?>
		        	</li>
		        </ul>
				<article>
					<?php echo $postagem['texto'] ?>
				</article>

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

				<br><br>

				<div id="disqus_thread"></div>
				<script>

				/**
				*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
				/*
				var disqus_config = function () {
				this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				*/
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');
				s.src = 'https://effi-com-br.disqus.com/embed.js';
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			</div>
			<div class="col-lg-3 col-md-3">
				<?php require "sidebar-right.php" ?>
			</div>
		</div>
	</div>
</section>