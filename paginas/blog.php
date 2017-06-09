<section id="blog-section">
	<?php
		
		$categorias = $Categorias->findAll();

        if(isset($_GET['buscar']) && !empty($_GET['buscar'])) {
            // Filtra por
            $postagens = $Postagens->findWhere($currencyEmpresa['id'], $_GET['buscar']);
        } else {
            // Trazer todos
            $postagens = $Postagens->findAll($currencyEmpresa['id']);
        }

        if(is_null($modulo1)) {
            
            require "paginas/blog/home.php";
        } else {
        	if(!is_null($modulo1)) {

        		if(!is_null($modulo2)) {
        			// Post Unico
        			require "paginas/blog/post.php";
        		} else {
        			// Categoria Unica
        			require "paginas/blog/categoria.php";
        		}
            } else {
            	require "paginas/404.php";	
            }
        }
    ?>
</section>