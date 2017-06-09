<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if($modulo1): ?>
                    <h2 class="font-secundary">Deixe seu telefone</h2>
                    <h4>Que <strong>em seguida ligaremos</strong> para você!</h4>
                <?php else: ?>
                    <h2 class="font-secundary">Vamos <strong>conversar?</strong></h2>
                <?php endif ?>
                <div class="hr-detalhe red"></div>
            </div>
        </div>
        <br><br>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="map-iframe">
                <div id="map-canvas"></div>
            
                <div class="map-body">
                    <div class="col-lg-5 text-left">
                        <div class="panel panel-body">
                            <div class="form-area">
                                <h4>Envie sua mensagem</h4>
                                <form role="form">
                                    <div class="form-group">
                                        <label for="nome">Nome:*</label>
                                        <input type="text" class="form-control" id="nome" name="nome" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail:*</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telefone">Telefone:*</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telefone">Mensagem:*</label>
                                        <textarea class="form-control" type="textarea" id="message" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" id="submit" name="submit" class="btn btn-danger pull-right">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                            Enviar mensagem
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="footer-contato">
                                <div class="col-lg-6">
                                    <div class="entre-em-contato">
                                        <h4>Entre em contato</h4>
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
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="conecte-se">
                                        <h4>Conecte-se com a Efficiency</h4>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>