<?php
	require "server/Ebooks.class.php";
	$Ebooks = new Ebooks();

	$ebook = $Ebooks->find($currencyEmpresa['ebook_header_blog']);

	$nb_elem_per_page = 5;
	$page = isset($_GET['page'])?intval($_GET['page']-1):1;
	$number_of_pages = intval(count($postagens)/$nb_elem_per_page)+1;
	$arrayPaginated = array_slice($postagens, $page*$nb_elem_per_page, $nb_elem_per_page);
?>
<header id="header" class="slide">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="font-secundary">E-book Grátis</h2>
                <div class="hr-detalhe white"></div>
                <h4><?php echo $ebook['titulo'] ?></h4>
                <p><?php echo substr($ebook['descricao'], 0, 140); echo strlen($ebook['descricao'])>140 ? "[...]" : "" ?></p>
                <br>
                <a href="<?php echo URL::getBase() ?>lista-vip/<?php echo $ebook['id_ebook'] . '-' . URL::removeAcentos($ebook['titulo'], '_') ?>" class="btn btn-warning btn-lg">Baixe o seu agora!</a>
            </div>
            <div class="col-lg-6">
            	<div class="row">
	            	<div class="col-lg-offset-6 col-lg-6">
		            	<div class="ebook-header">
		            		<img src="<?php echo $ebook['img'] ?>" alt="<?php echo $ebook['titulo'] ?>" title="<?php echo $ebook['titulo'] ?>" class="img-responsive">
		            	</div>
	            	</div>
            	</div>
            </div>
        </div>
    </div>
</header>
<section class="body-home-blog">
	<div class="container">
		<?php if((!empty($_GET['page'])&&isset($_GET['page'])) || (!empty($_GET['buscar'])&&isset($_GET['buscar']))): ?>
			<div class="panel panel-body">
				<h3 style="margin-top: 10px">
					<?php echo count($arrayPaginated) ?> resultado<?php echo count($arrayPaginated)>1 ? 's' : '' ?> encontrado<?php echo count($arrayPaginated)>1 ? 's' : '' ?>
					<small><?php echo $page+1 . '/' . $number_of_pages ?></small>
					Filtrado<?php echo count($arrayPaginated)>1 ? 's' : '' ?> por <small>"<?php echo $_GET['buscar'] ?>"</small>
				</h3>
			</div>
		<?php endif ?>
		<div class="row">
			<div class="col-md-9">
				<main>
					<?php
						foreach ($arrayPaginated as $post):
							$dataPost = date("d/m/Y", strtotime($post['data']));
					?>
						<div class="cada-postagem panel panel-body">
							<div class="row">
							    <div class="col-md-7">
							        <header>
								        <a href="<?php echo URL::getBase() ?>blog/<?php echo $post['id_categoria'] . '-' . URL::removeAcentos($post['nome'], '_') . '/' . $post['id_postagem'] . '-' . URL::removeAcentos($post['titulo'], '_') ?>">
								        	<div class="data-post">
			                                    <i class="fa fa-calendar" aria-hidden="true"></i>
			                                    <strong><?php echo explode('/', $dataPost)[0] ?></strong>/<?php echo explode('/', $dataPost)[1] ?>/<?php echo explode('/', $dataPost)[2] ?>
			                                </div>
								            <img class="img-responsive" src="<?php echo $post['img'] ?>" alt="<?php echo $post['titulo'] ?>" title="<?php echo $post['titulo'] ?>">
								        </a>
							        </header>
							    </div>
							    <div class="col-md-5">
							        <h3><?php echo $post['titulo'] ?></h3>
							        <div class="hr-detalhe red"></div>
							        <p><?php echo substr($post['chamada'], 0, 140); echo strlen($post['chamada'])>140 ? "[...]" : "" ?></p>
							        
							        <!-- Autor / Views / Categoria -->
							        <ul class="list-inline infos-list-blog">
							        	<li>
							        		<p><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo substr($post['autor'], 0, 20); echo strlen($post['autor'])>20 ? "[...]" : "" ?></p>
							        	</li>
							        	<li>
							        		<p><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $post['views'] ?></p>
							        	</li>
							        	<li>
							        		<a href="<?php echo URL::getBase() ?>blog/<?php echo $post['id_categoria'] . '-' . URL::removeAcentos($post['nome'], '_') ?>">
							        			<span class="label" style="background-color: <?php echo $post['cor'] ?>"><?php echo $post['nome'] ?></span>
							        		</a>
							        	</li>
							        </ul>

							        <!-- Botao de Continuar Lendo -->
							        <a class="btn btn-danger" href="<?php echo URL::getBase() ?>blog/<?php echo $post['id_categoria'] . '-' . URL::removeAcentos($post['nome'], '_') . '/' . $post['id_postagem'] . '-' . URL::removeAcentos($post['titulo'], '_') ?>">Continuar Lendo <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							    </div>
							</div>
						</div>
					<?php endforeach ?>
				</main>
				<nav aria-label="Navegação entre páginas" class="text-left">
                    <ul class="pagination">
                        <li>
                            <a href='<?php echo URL::getBase() ?>blog?page=1' aria-label="Previous" class="<?php echo $page<=0 ? 'disabled' : '' ?>">
                                <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href='<?php echo URL::getBase() ?>blog?page=<?php echo $page ?>' aria-label="Previous" class="<?php echo $page <= 0 ? 'disabled' : '' ?>">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </a>
                        </li>
                        <?php for($i=0;$i<$number_of_pages;$i++): ?>
                                <li class="<?php echo $page == $i || ($page<=0&&!$i) ? 'active' : '' ?>"><a href='<?php echo URL::getBase() ?>blog?page=<?php echo $i+1 ?>'><?php echo $i+1 ?></a></li>
                        <?php endfor ?>
                        <li>
                            <a href='<?php echo URL::getBase() ?>blog?page=<?php echo $page+1 ?>' class="<?php echo $page+1 >= $number_of_pages ? 'disabled' : '' ?>">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a  href='<?php echo URL::getBase() ?>blog?page=<?php echo $number_of_pages ?>' class="<?php echo $page+1 >= $number_of_pages ? 'disabled' : '' ?>">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
			</div>
			<div class="col-md-3">
				<?php require "sidebar-right.php" ?>
			</div>
		</div>
	</div>
</section>