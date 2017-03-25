<div class="row" style="padding: 20px">
    <div class="col-sm-12">
        <p>Campos com <font color="red">*</font> são obrigatórios!</p>
    </div>
</div>

<div class="container">
    <div class="input-field">
        <div class="form-group fg-line">
            <label>Nome do papel: *</label>
            <input type="text" name="nome" class="form-control input-sm"
                   value="{{ isset($registro->nome)? $registro->nome : ''  }}" required>
        </div>
    </div>
    <div class="input-field">
        <div class="form-group fg-line">
            <label>Descrição *</label>
            <input type="text" name="descricao" class="form-control input-sm"
                   value="{{ isset($registro->descricao)? $registro->descricao : ''  }}" required>
        </div>
    </div>
</div>
