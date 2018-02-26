<!-- Services Section -->
<section id="ultimas-blog" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h2 class="font-secundary">Últimas do <strong>blog</strong></h2>
                <div class="hr-detalhe red"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <?php 
                        foreach ($postsTrhee as $__postTrhee): 
                            $dataPost = date("d/m/Y", strtotime($__postTrhee['data']));
                    ?>
                        <div class="col-lg-4">
                            <div class="cada-postagem-blog">
                                <div class="head-post-blog">
                                    <div class="data-post">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <strong><?php echo explode('/', $dataPost)[0] ?></strong>/<?php echo explode('/', $dataPost)[1] ?>/<?php echo explode('/', $dataPost)[2] ?>
                                    </div>
                                    <img class="img-responsive" src="<?php echo $__postTrhee['img'] ?>" alt="<?php echo $__postTrhee['titulo'] ?>" title="<?php echo $__postTrhee['titulo'] ?>">
                                </div>
                                <div class="footer-post-blog">
                                    <h4><?php echo $__postTrhee['titulo'] ?></h4>
                                    <p><?php echo substr($__postTrhee['chamada'], 0, 140); echo strlen($__postTrhee['chamada'])>140 ? "[...]" : "" ?></p>
                                    <a href="<?php echo URL::getBase() ?>blog/<?php echo $__postTrhee['id_categoria'] . '-' . URL::removeAcentos($__postTrhee['nome'], '_') . '/' . $__postTrhee['id_postagem'] . '-' . URL::removeAcentos($__postTrhee['titulo'], '_') ?>">
                                        Saiba mais
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="texts-ultimas-blogs-footer">
                <div class="col-lg-6">
                    <p>Postagens semanais, <strong>pensadas e feitas para você.</strong></p>
                </div>
                <div class="col-lg-6 text-right pull-right">
                    <p>Veja todos nossos tutoriais, <a href="<?php echo URL::getBase() ?>blog/" class="text-danger">clicando aqui <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</section>