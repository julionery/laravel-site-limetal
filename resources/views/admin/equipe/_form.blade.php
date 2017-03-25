<div class="row" style="padding: 20px">
    <div class="col-sm-9">
        <p>Campos com <font color="red">*</font> são obrigatórios!</p>
    </div>
    <div class="col-sm-1">
        <label>Publicado?</label>
    </div>
    <div class="col-sm-2">
        <select class="selectpicker" name="publicar">
            <option value="nao" {{(isset($registro->publicar) && $registro->publicar == 'nao' ? 'selected' : "")}}>Não
            </option>
            <option value="sim" {{(isset($registro->publicar) && $registro->publicar == 'sim' ? 'selected' : "")}}>Sim
            </option>
        </select>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Nome: *</label>
                    <input type="text" class="form-control" name="nome" required
                           value="{{ isset($registro->nome)? $registro->nome : ''  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Profição</label>
                    <input type="text" class="form-control" name="proficao" required
                           value="{{ (isset($registro->proficao)? $registro->proficao : '')  }}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Link Facebook:</label>
                    <input type="text" name="facebook" class="form-control"
                           value="{{ (isset($registro->facebook)? $registro->facebook : '')  }}">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Link Twitter:</label>
                    <input type="text" name="twitter" class="form-control"
                           value="{{ (isset($registro->twitter)? $registro->twitter : '')  }}">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Link LinkedIn:</label>
                    <input type="text" name="linkedin" class="form-control"
                           value="{{ (isset($registro->linkedin)? $registro->linkedin : '')  }}">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <label>Imagem:</label>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
            <span class="btn btn-info btn-file">
            <span class="fileinput-new">Selecione - Trocar</span>
                <span class="fileinput-exists"> a Imagem</span>
                <input type="file" name="imagem" @if(!isset($registro->imagem)) required @endif>
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
                        @if(isset($registro->imagem))
                            <img width="350" src="{{ asset($registro->imagem) }}">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
</div>