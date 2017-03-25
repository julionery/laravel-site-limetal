<div class="row" style="padding: 20px">
    <div class="col-sm-12">
        <p>Campos com <font color="red">*</font> são obrigatórios!</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Título: *</label>
                    <input type="text" name="titulo" class="form-control input-sm"
                           value="{{ isset($pagina->titulo)? $pagina->titulo : '' }}" required>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Descrição *</label>
                    <input type="text" name="descricao" class="form-control"
                           value="{{ isset($pagina->descricao)? $pagina->descricao : '' }}" required>
                </div>
            </div>
        </div>
    </div>
    @if(isset($pagina->email))
        <div class="input-field">
            <div class="form-group fg-line">
                <label>E-mail *</label>
                <input type="text" name="email" class="form-control input-sm"
                       value="{{ isset($pagina->email)? $pagina->email : ''  }}">
            </div>
        </div>
    @endif

    <div class="input-field">
        <div class="form-group fg-line">
            <label>Texto</label>
            <textarea name="texto" class="form-control" rows="5">
        {{ isset($pagina->texto)? $pagina->texto : '' }}
    </textarea>
        </div>
    </div>

    @if(isset($pagina->imagem))
        <div class="row">
            <div class="col-sm-4">
                <label>Imagem:</label>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
            <span class="btn btn-info btn-file">
            <span class="fileinput-new">Selecione - Trocar</span>
                <span class="fileinput-exists"> a Imagem</span>
                <input type="file" name="imagem">
            </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <label>Imagem Atual:</label>
                <div class="input-field">
                    <div class="form-group">
                        @if(isset($pagina->imagem))
                            <img width="350" src="{{ asset($pagina->imagem) }}">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(isset($pagina->mapa))
        <br/>
        <div class="input-field">
            <div class="form-group fg-line">
                <label>Mapa: </label>
                <textarea name="mapa" class="form-control input-sm" rows="5">
                {{ isset($pagina->mapa)? $pagina->mapa : ''  }}
            </textarea>
            </div>
        </div>
    @endif
</div>