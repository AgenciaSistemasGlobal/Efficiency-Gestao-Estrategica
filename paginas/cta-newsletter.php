<section id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="font-secundary">Você tem um pequeno negócio?</h2>
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-body panel-newsletter">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="emailNewsLetter">Deixe seu melhor email</label>
                        </div>
                    </div>
                    <div class="row">
                        <form action="<?php echo URL::getBase() ?>lista-vip" method="get" name="ctaNews">
                            <div class="col-md-9">
                                <input type="email" name="email" class="form-control input-lg" placeholder="seulindoemail@aqui.com.br" id="emailNewsLetter" required>
                            </div>
                            <div class="col-md-3 text-center">
                                <button type="submit" class="btn btn-lg btn-warning">Entrar para lista VIP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>