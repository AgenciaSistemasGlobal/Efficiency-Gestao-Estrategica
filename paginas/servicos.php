<?php
    $arrServicos = [
        [
            "id"=>1,
            "titulo"=>"Assessoria Contábil",
            "descricao"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit."
        ],
        [
            "id"=>2,
            "titulo"=>"Assessoria Fiscal",
            "descricao"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit."
        ],
        [
            "id"=>3,
            "titulo"=>"Assessoria Contábil",
            "descricao"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit."
        ],
        [
            "id"=>4,
            "titulo"=>"Assessoria Fiscal",
            "descricao"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit."
        ],
        [
            "id"=>5,
            "titulo"=>"Assessoria Contábil",
            "descricao"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit."
        ],
        [
            "id"=>6,
            "titulo"=>"Assessoria Fiscal",
            "descricao"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit."
        ]
    ];
?>

<section id="intro" class="servicos-section">
    <div class="container">
        <?php if(is_null($modulo1)): ?>
            <div class="row servicos">
                <div class="col-lg-12">
                    <h2 class="font-secundary"><strong>Principais serviços</strong> e <br>tercerizações</h2>
                    <div class="hr-detalhe red"></div>
                    <div class="row">
                        <?php foreach ($arrServicos as $__arrServicos): ?>
                            <div class="col-lg-4">
                                <div class="cada-servico">
                                    <h3><strong><?php echo $__arrServicos['titulo'] ?></strong></h3>
                                    <p><?php echo substr($__arrServicos['descricao'], 0, 100); echo strlen($__arrServicos['descricao'])>100 ? "[...]" : "" ?></p>
                                    <a href="<?php echo URL::getBase() . 'servicos/' . $__arrServicos['id'] . '-' . URL::removeAcentos($__arrServicos['titulo'], '_') ?>" title="<?php echo $__arrServicos['titulo'] ?>" class="text-danger">Saiba mais</a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <article>
                <?php 
                    foreach ($arrServicos as $key => $value):
                        if($arrServicos[$key]['id'] == URL::getIdUri($modulo1)):
                ?>
                            <h1><?php echo $arrServicos[$key]['titulo'] ?></h1>
                            <div class="hr-detalhe red"></div>
                            <p><?php echo $arrServicos[$key]['descricao'] ?></p>
                <?php 
                        endif;
                    endforeach;
                ?>
                <br>
                <a href="<?php echo URL::getBase() . 'servicos' ?>" title="Lista completa de serviços" class="text-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar para lista completa de serviços</a>
            </article>
        <?php endif ?>
    </div>
</section>

<?php if($modulo!="home") require "cta-newsletter.php" ?>