<div class="row" style="padding: 20px">
    <div class="col-sm-9">
        <p>Campos com <font color="red">*</font> são obrigatórios!</p>
    </div>
    @if(isset($registro->imagem))
        <div class="col-sm-1">
            <label>Publicado?</label>
        </div>
        <div class="col-sm-2">
            <select class="selectpicker" name="publicado">
                <option value="nao" {{(isset($registro->publicado) && $registro->publicado == 'nao' ? 'selected' : "")}}>
                    Não
                </option>
                <option value="sim" {{(isset($registro->publicado) && $registro->publicado == 'sim' ? 'selected' : "")}}>
                    Sim
                </option>
            </select>
        </div>
    @endif
</div>

@if(isset($registro->imagem))


    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>Título: *</label>
                        <input type="text" class="form-control" name="titulo"
                               value="{{ isset($registro->titulo)? $registro->titulo : ''  }}">
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>Descrição</label>
                        <input type="text" class="form-control" name="descricao"
                               value="{{ (isset($registro->descricao)? $registro->descricao : '')  }}">
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>Ordem:</label>
                        <input type="text" class="form-control" name="ordem" required
                               value="{{ (isset($registro->ordem)? $registro->ordem : '')  }}">
                    </div>
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
@else

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <label>Upload de Imagens</label>
                <input type="file" multiple name="imagens[]">
            </div>
        </div>
    </div>
    <br />
    <br />
@endif
