<?php
require_once ("./Url.class.php");
require_once ("./Conexao.class.php");
require_once ("./Ebooks.class.php");
require_once ("./Postagens.class.php");
require_once ("./Categorias.class.php");

$Ebooks       = new Ebooks();
$Postagens    = new Postagens();
$Categorias   = new Categorias();

$ebooks       = $Ebooks->findAll(3);
$categorias   = $Categorias->findAll();
$posts        = $Postagens->findAll(3);

$hoje      = date('Y-m-d');

header("Content-Type: application/xml; charset=UTF-8");
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
  <url>
    <loc>http://effi.com.br</loc>
    <lastmod><?php echo $hoje;?></lastmod>
    <priority>1.0</priority>
    <changefreq>daily</changefreq>
  </url>
  <url>
    <loc>http://effi.com.br/servicos</loc>
    <lastmod><?php echo $hoje;?></lastmod>
    <priority>0.9</priority>
    <changefreq>daily</changefreq>
  </url>
  <url>
    <loc>http://effi.com.br/servicos/1-serviço_contábeis</loc>
    <lastmod><?php echo $hoje;?></lastmod>
    <priority>0.8</priority>
    <changefreq>daily</changefreq>
  </url>
  <url>
    <loc>http://effi.com.br/servicos/2-auditoria</loc>
    <lastmod><?php echo $hoje;?></lastmod>
    <priority>0.8</priority>
    <changefreq>daily</changefreq>
  </url>
  <url>
    <loc>http://effi.com.br/servicos/3-consultoria_empresarial</loc>
    <lastmod><?php echo $hoje;?></lastmod>
    <priority>0.8</priority>
    <changefreq>daily</changefreq>
  </url>
  <url>
    <loc>http://effi.com.br/parceiros</loc>
    <lastmod><?php echo $hoje;?></lastmod>
    <priority>0.9</priority>
    <changefreq>daily</changefreq>
  </url>
  <url>
    <loc>http://effi.com.br/blog</loc>
    <lastmod><?php echo $hoje;?></lastmod>
    <priority>0.9</priority>
    <changefreq>daily</changefreq>
  </url>
  <url>
    <loc>http://effi.com.br/contato</loc>
    <lastmod><?php echo $hoje;?></lastmod>
    <priority>0.9</priority>
    <changefreq>daily</changefreq>
  </url>
  <url>
    <loc>http://effi.com.br/contato/me-ligue-agora</loc>
    <lastmod><?php echo $hoje;?></lastmod>
    <priority>0.8</priority>
    <changefreq>daily</changefreq>
  </url>
  <url>
    <loc>http://effi.com.br/lista-vip</loc>
    <lastmod><?php echo $hoje;?></lastmod>
    <priority>0.8</priority>
    <changefreq>daily</changefreq>
  </url>
  <?php
  for ($i=0; $i < count($categorias); $i++) {
    echo "<url>
      <loc>http://effi.com.br/blog/" . $categorias[$i]['id_categoria'] . "-" . URL::removeAcentos($categorias[$i]['nome'], '_') . "</loc>
      <lastmod>".$hoje."</lastmod>
      <changefreq>daily</changefreq>
      <priority>0.7</priority>
    </url>";
  }

  for ($x=0; $x < count($posts); $x++) {
    echo "<url>
      <loc>http://effi.com.br/blog/" . $posts[$x]['id_categoria'] . '-' . URL::removeAcentos($posts[$x]['nome'], '_') . '/' . $posts[$x]['id_postagem'] . '-' . URL::removeAcentos($posts[$x]['titulo'], '_') . "</loc>
      <lastmod>".$hoje."</lastmod> 
      <changefreq>daily</changefreq>
      <priority>0.7</priority>
    </url>";
  }

  for ($j=0; $j < count($ebooks); $j++) {
    echo "<url>
      <loc>http://effi.com.br/lista-vip/" . $ebooks[$j]['id_ebook'] . '-' . URL::removeAcentos($ebooks[$j]['titulo'], '_') . "</loc>
      <lastmod>".$hoje."</lastmod> 
      <changefreq>daily</changefreq>
      <priority>0.7</priority>
    </url>";
  }
  ?>
</urlset>