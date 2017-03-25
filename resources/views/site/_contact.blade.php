
<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">{{$contato->titulo}}</h2>
                <h3 class="section-subheading text-muted">{{$contato->descricao}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                    <form action="{{ route('site.contato.enviar') }}" method="post">
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome *" name="nome" required data-validation-required-message="Por favor digite seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-mail *" name="email" required data-validation-required-message="Por favor digite seu endereço de e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Telefone *" name="telefone" required data-validation-required-message="Por favor digite seu numero de telefone.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Sua messagem *" name="mensagem" required data-validation-required-message="Por favor digite sua mensagem."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Enviar Mensagem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>