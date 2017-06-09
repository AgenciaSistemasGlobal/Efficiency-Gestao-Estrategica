<section id="clientes" class="clientes-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="font-secundary">Nossos grandes <strong>parceiros</strong></h2>
                <div class="hr-detalhe red"></div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-4">
                <div class="cada-parceiro">
                    <header>
                        <img src="<?php echo URL::getBase() ?>img/logotipos/logotipos (1).gif" alt="" class="img-responsive grayscale">
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cada-parceiro">
                    <header>
                        <img src="<?php echo URL::getBase() ?>img/logotipos/unigran-logotipo.png" alt="" class="img-responsive grayscale">
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cada-parceiro">
                    <header>
                        <img src="<?php echo URL::getBase() ?>img/logotipos/voxtributaria.png" alt="" class="img-responsive grayscale">
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if($modulo!="home") require "oferta-ebook.php" ?>