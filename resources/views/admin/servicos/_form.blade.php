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
                    <label>Título: *</label>
                    <input type="text" class="form-control" name="titulo" required
                           value="{{ isset($registro->titulo)? $registro->titulo : ''  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Descrição</label>
                    <input type="text" class="form-control" name="descricao" required
                           value="{{ (isset($registro->descricao)? $registro->descricao : '')  }}">
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
                    <label>Detalhes:</label>
                    <input type="text" name="detalhes" class="form-control"
                           value="{{ (isset($registro->detalhes)? $registro->detalhes : '')  }}">
                </div>
            </div>
        </div>
    </div>
    <div class="input-field">
        <div class="form-group fg-line">
            <label>Texto: </label>
            <textarea name="texto" class="form-control input-sm" rows="5">
                {{ isset($registro->texto)? $registro->texto : ''  }}
            </textarea>
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