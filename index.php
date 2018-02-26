<?php
    require "server/Url.class.php";
    require "server/Conexao.class.php";
    require "server/Empresa.class.php";
    require "server/Categorias.class.php";
    require "server/Postagens.class.php";
    require "server/Newsletter.class.php";
    require "server/Ebooks.class.php";

    $Categorias = new Categorias();
    $Postagens = new Postagens();
    $Empresa = new Empresa();
    $Newsletter = new Newsletter();
    $Ebooks = new Ebooks();

    session_start();

    $modulo = Url::getURL(0);
    $modulo1 = Url::getURL(1);
    $modulo2 = Url::getURL(2);
    $modulo3 = Url::getURL(3);

    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $description = "Escritório Contábil, assessoria e consultoria Empresária, Tributária, Trabalhista e Societária.
    Apresentamos ao cliente o entendimento conceitual e operacional da Gestão Contábil e Gestão Jurídica Empresarial. 
    Serviços:
    Assessoria contábil
    Assessoria Fiscal
    Assessoria Trabalhista
    Gestão Tributária e Controladoria:
    Auditoria Fiscal, Trabalhista e Contábil
    Planejamento Tributário
    Societário e implementação
    Pareceres consultas técnicas
    Reestruturação da área administrativa, financeira e contábil
    Projeção Econômica e financeira";

    $isAdmin = false;
    $currencyEmpresa = $Empresa->find(3);
    $newsletterContent = $Newsletter->find($currencyEmpresa['id']);
    $postsTrhee = $Postagens->findFirsts($currencyEmpresa['id']);
    $titleFirst = "Efficiency Gestão Estratégica";
    $ogImage = "http://effi.com.br/img/efficiency_gestao.png";

    switch ($modulo) {
        case 'admin':
            $isAdmin = true;
            break;
        case 'servicos':
            $titleFirst = "Serviços - Efficiency";
            break;
        case 'parceiros':
            $titleFirst = "Parceiros - Efficiency";
            break;
        case 'blog':
            $titleFirst = "Blog - Efficiency";

            if($modulo1) {
                $categoria = $Categorias->find(URL::getIdUri($modulo1));

                $titleFirst = $categoria['nome'] . " - Efficiency";

                if($modulo2) {
                    $idPost = URL::getIdUri($modulo2);
                    $postagemHead = $Postagens->find($idPost, $currencyEmpresa['id']);

                    $titleFirst = $postagemHead['titulo'] . " - Efficiency";

                    $ogImage = $postagemHead['img'];
                }
            }
            break;
        case 'contato':
            $titleFirst = "Contato - Efficiency";

            if($modulo1) {
                $titleFirst = "Me Ligue Agora - Efficiency";
            }
            break;
        case 'lista-vip':
            $titleFirst = "Inscreva-se em nossa lista VIP! - Efficiency";

            if($modulo1) {
                $ebook = $Ebooks->find(URL::getIdUri($modulo1), $currencyEmpresa['id']);

                $titleFirst = $ebook['titulo'] . " - Efficiency";

                $ogImage = $ebook['img'];
            }
            break;
    }
?>

<?php if (!$isAdmin): ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
        <head>
            
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-PN7S5GN');</script>
            <!-- End Google Tag Manager -->

            <base href="/">
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Apresentamos ao cliente o entendimento conceitual e operacional da Gestão Contábil e Gestão Jurídica Empresarial.">
            <meta name="author" content="http://effi.com.br/">

            <link rel="shortcut icon" href="<?php echo URL::getBase() ?>img/gestao-estrategica-portoalegre-assesoria-contabil-logotipo.ico" type="image/x-icon">
            <link rel="icon" href="<?php echo URL::getBase() ?>img/gestao-estrategica-portoalegre-assesoria-contabil-logotipo.ico" type="image/x-icon">

            <meta property="og:locale"        content="pt_BR" />
            <meta property="og:site_name"     content="Efficiency Gestão Estratégica" />
            <meta property="og:url"           content="<?php echo $url ?>" />
            <meta property="og:type"          content="website"/>
            <meta property="og:title"         content="<?php echo $titleFirst ?>" />
            <meta property="og:description"   content="<?php echo $description ?>" />
            <meta property="og:image"         content="<?php echo $ogImage ?>" />

            <meta itemprop="url"         content="<?php echo $url ?>"/>
            <meta itemprop="name"        content="<?php echo $titleFirst ?>">
            <meta itemprop="description" content="<?php echo $description ?>">
            <meta itemprop="image"       content="<?php echo $ogImage ?>">

            <title><?php echo $titleFirst ?></title>

            <!-- Bootstrap Core CSS -->
            <link href="<?php echo URL::getBase() ?>css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="<?php echo URL::getBase() ?>css/scrolling-nav.css" rel="stylesheet">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poiret+One" rel="stylesheet">

            <?php if($modulo == "blog"): ?>
                <!-- GetSocial -->
                <script type="text/javascript">
                (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = '//api.at.getsocial.io/widget/v1/gs_async.js?id=50c247'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();
                </script>
            <?php endif ?>
        </head>
        <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="body-<?php echo $modulo ?>-page">

            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PN7S5GN"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->

            <div id="fb-root"></div>
            <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=1364340600304232";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed-top <?php if($modulo == "blog") echo 'blog-page' ?>" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="#page-top" title="Efficiency Gestão Estratégica">
                            <img src="<?php echo URL::getBase() ?>img/consultoria-empresarial-juridica-contabil-logotipo.png" alt="Consultoria Empresarial Jurídica Contábil" class="img-responsive transition">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right nav-all-pages">
                            <li class="<?php if($modulo == 'home' || is_null($modulo)) echo 'active' ?>">
                                <a href="<?php echo URL::getBase() ?>">Home</a>
                            </li>
                            <li class="<?php if($modulo == 'servicos') echo 'active' ?>">
                                <a href="<?php echo URL::getBase() ?>servicos">Serviços</a>
                            </li>
                            <li class="<?php if($modulo == 'parceiros') echo 'active' ?>">
                                <a href="<?php echo URL::getBase() ?>parceiros">Parceiros</a>
                            </li>
                            <li class="<?php if($modulo == 'blog') echo 'active' ?>">
                                <a href="<?php echo URL::getBase() ?>blog">Blog</a>
                            </li>
                            <li class="<?php if($modulo == 'contato') echo 'active' ?>">
                                <a href="<?php echo URL::getBase() ?>contato">Contato</a>
                            </li>
                            <li>
                                <a class="btn btn-danger" href="<?php echo URL::getBase() ?>contato/me-ligue-agora">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Me ligue agora</span>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-default" href="http://effi.iebrs.net/" target="_self">
                                    <span>Portal Cursos EAD</span>
                                </a>
                            </li>
                        </ul>
                        <?php if($modulo == "blog"): ?>
                            <ul class="nav navbar-nav navbar-right nav-blog">
                                <li>
                                    <a href="https://www.facebook.com/pg/effi.com.br">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-input-search">
                                    <form name="formSerachTop" action="<?php echo URL::getBase() ?>blog" id="formSerachTop" method="GET">
                                        <input type="text" id="buscarSearch" name="buscar" class="form-control input-search transition" placeholder="Buscar por..." required>
                                        <i class="fa fa-search" aria-hidden="true" onclick="if(!document.getElementById('buscarSearch').value.length) return false; document.getElementById('formSerachTop').submit()"></i>
                                    </form>
                                </li>
                            </ul>
                        <?php endif ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>

            <?php

                if(is_null($modulo)) $modulo = "home";
        
                if(file_exists("paginas/" . $modulo . ".php")) {
                    require "paginas/" . $modulo  . ".php";
                } else {
                    require "paginas/404.php";
                }
            ?>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="panel panel-news">
                                            <div class="panel-body" style="padding: 0 0 15px 0">
                                                <h3><?php echo $newsletterContent['titulo'] ?></h3>
                                                <p><?php echo $newsletterContent['texto'] ?></p>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="<?php echo URL::getBase() ?>lista-vip" class="btn btn-white">Inscreva-se já!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3>Vamos conversar</h3>
                                        <ul class="contatos-list">
                                            <li>contato@effi.com.br</li>
                                            <li>+55 (51) 3062-6025</li>
                                            <li>Praça Osvaldo Cruz, 15, Sala 2111 <br>Centro Histórico, Porto Alegre - RS</li>
                                        </ul>
                                        <ul class="list-inline">
                                            <li>
                                                <a href="https://www.facebook.com/effi.com.br">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/efficiencygestao/">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3>Postagens</h3>
                                        <ul>
                                            <?php foreach ($postsTrhee as $postTrhee): ?>
                                                <li>
                                                    <a href="<?php echo URL::getBase() ?>blog/<?php echo $postTrhee['id_categoria'] . '-' . URL::removeAcentos($postTrhee['nome'], '_') . '/' . $postTrhee['id_postagem'] . '-' . URL::removeAcentos($postTrhee['titulo'], '_') ?>">
                                                        <?php echo $postTrhee['titulo'] ?>
                                                    </a>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fb-page" data-href="https://www.facebook.com/effi.com.br/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/effi.com.br/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/effi.com.br/">Efficiency Gestão - Contabilidade e Advocacia</a></blockquote></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pre-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-8">
                                    <div>© 2017 Efficiency Gestão Estratégica. Todos os direitos reservados.</div>
                                </div>
                                <div class="col-lg-4">
                                    <a href="https://sistemasglobal.com.br">
                                        <img src="https://sistemasglobal.com.br/wp-content/uploads/2017/08/logotipo-criacao-de-sites.png" alt="Agência Digital Sistemas Global" title="Agência Digital Sistemas Global" class="img-responsive pull-right logo-footer grayscale">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <a href="#page-top" target="_self" class="page-scroll transition" id="toTop">
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
            </a>

            <?php if($modulo == "home" || $modulo == "contato"): ?>
                <script>
                    var _beachMarker;
                    function initMap() {
                        var map = new google.maps.Map(document.getElementById('map-canvas'), {
                            zoom: 17,
                            center: {lat: -30.02641964, lng: -51.22383458}
                        });

                        var image = '<?php echo URL::getBase() ?>img/pin-consultoria-empresarial-juridica-contabil.png';
                        var beachMarker = new google.maps.Marker({
                            position: {lat: -30.0263732, lng: -51.2222038},
                            map: map,
                            icon: image,
                            animation: google.maps.Animation.DROP,
                            draggable: true
                        });
                        beachMarker.addListener('click', toggleBounce);
                        _beachMarker = beachMarker;
                    }
                    function toggleBounce() {
                        if (_beachMarker.getAnimation() !== null) {
                            _beachMarker.setAnimation(null);
                        } else {
                            _beachMarker.setAnimation(google.maps.Animation.BOUNCE);
                        }
                    }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2HizsU7PrgV58QVnXGnin_Wg24Lv-52I&callback=initMap">
                </script>
            <?php endif ?>

            <?php if($modulo == "lista-vip"): ?>

                <!-- Posicione esta tag depois da última tag do botão +1. -->
                <script type="text/javascript">
                window.___gcfg = {lang: 'pt-BR'};

                (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/platform.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
                </script>

                <?php if($modulo == "blog" && (isset($modulo1)&&!empty($modulo1))): ?>
                    <script id="dsq-count-scr" src="//effi-com-br.disqus.com/count.js" async></script>
                <?php endif ?>
            <?php endif ?>

            <!-- jQuery -->
            <script src="<?php echo URL::getBase() ?>js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="<?php echo URL::getBase() ?>js/bootstrap.min.js"></script>

            <!-- Scrolling Nav JavaScript -->
            <script src="<?php echo URL::getBase() ?>js/jquery.easing.min.js"></script>
            <script src="<?php echo URL::getBase() ?>js/scrolling-nav.js"></script>
        </body>
    </html>
<?php else: ?>
    <?php require 'paginas/admin/pages/index.php' ?>
<?php endif; ?>