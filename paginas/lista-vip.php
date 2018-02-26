<header id="header" class="slide landing-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php if($ebook): ?>
                    <div class="row row-xs-flex-center">
                        <div class="col-lg-2 text-center">
                            <div class="row form-group">
                                <div class="fb-like" data-href="<?php echo $_SERVER['REQUEST_URI'] ?>" data-layout="box_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                            </div>
                            <div class="row form-group">
                                <!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
                                <div class="g-plusone" data-size="tall"></div>
                            </div>
                            <div class="row form-group">
                                <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: pt_BR</script>
                                <script type="IN/Share" data-counter="top"></script>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div class="ebook-header">
                                <img src="<?php echo $ebook['img'] ?>" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-newletter">
                                <i id="icon-newletter-listavip" class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                <h3><?php echo $newsletterContent['titulo'] ?></h3>
                                <p><?php echo $newsletterContent['texto'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-lg-4">
                <div id="form-landing" class="panel panel-body">
                    <h1 class="font-secundary"><?php echo $ebook ? $ebook['titulo'] : $newsletterContent['titulo'] ?></h1>
                    <h5>Preencha o formulário abaixo</h5>
                    <div class="hr-detalhe white"></div>
                    <form role="form">
                        <div class="form-group">
                            <label for="nome">Nome:*</label>
                            <input type="text" class="form-control" id="nome" name="nome" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail:*</label>
                            <input type="email" class="form-control" id="email" name="email" required value="<?php echo isset($_GET['email']) ? $_GET['email'] : '' ?>">
                        </div>
                        <?php if($ebook): ?>
                            <div class="form-group">
                                <label for="telefone">Telefone:*</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" required>
                            </div>
                            <div class="form-group">
                                <label for="empresa">Empresa:*</label>
                                <input type="text" class="form-control" id="empresa" name="empresa" required>
                            </div>  
                            <div class="form-group">
                                <label for="cargo">Empresa:*</label>
                                <select name="cargo" id="cargo" class="form-control">
                                    <option disabled selected>Selecione seu cargo</option>
                                    <option value="1">Sócio / CEO</option>
                                </select>
                            </div>
                        <?php endif ?>
                        <div class="form-group">
                            <button type="button" id="submit" name="submit" class="btn btn-warning btn-lg">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                <?php echo $ebook ? 'Receber material' : 'Cadastrar' ?>
                            </button>
                        </div>
                        <div class="form-group">
                            <p>Não utilizaremos suas informações de contato para enviar qualquer tipo de SPAM.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="landingpage-body">
    <?php if($ebook): ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><?php echo $ebook['sub_titulo_ebook'] ?></h2>
                    <div class="hr-detalhe red"></div>
                    <article>
                        <?php echo $ebook['descricao'] ?>
                    </article>

                    <div id="disqus_thread"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://effi-com-br.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
            </div>
        </div>
    <?php endif ?>
</section>