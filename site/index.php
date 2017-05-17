<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Apresentamos ao cliente o entendimento conceitual e operacional da Gestão Contábil e Gestão Jurídica Empresarial.">
        <meta name="author" content="https://sistemasglobal.com.br/">

        <title>Efficiency Gestão Estratégica</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/scrolling-nav.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poiret+One" rel="stylesheet">
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top" title="Efficiency Gestão Estratégica">
                        <img src="./img/consultoria-empresarial-juridica-contabil-logotipo.png" alt="Consultoria Empresarial Jurídica Contábil" class="img-responsive transition">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Quem Somos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Serviços</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Blog</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contato</a>
                        </li>
                        <li>
                            <a class="page-scroll btn btn-danger" href="#contact">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>Me ligue agora</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <?php

            if(is_null($modulo)) $modulo = "home";
     
            if(file_exists("site/" . $modulo . ".php")) {
                require "site/" . $modulo  . ".php";
            } else {
                require "site/404.php";
            }
        ?>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h3>Navegue pelo site</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Sobre Nós</a></li>
                                        <li><a href="#">Serviços</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contato</a></li>
                                        <li><a href="#">Me ligue agora</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <h3>Vamos conversar</h3>
                                    <ul class="contatos-list">
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            efficiency@gmail.com
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            +55 (51) 3226-3653
                                        </li>
                                    </ul>
                                    <br>
                                    <ul class="list-inline">
                                        <li>
                                            <a href="#">
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
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <h3>Últimas do blog</h3>
                                    <ul>
                                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img src="./img/facebook-image.png" alt="" class="img-responsive">
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
                                <div>Só podia ser Sistemas Global</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrolling-nav.js"></script>
    </body>
</html>