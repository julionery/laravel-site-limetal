<div class="row" style="padding: 20px">
    <p>Campos com <font color="red">*</font> são obrigatórios!</p>
</div>
<div class="container">

    <div class="input-field">
        <div class="form-group fg-line">
            <label>Cidade: *</label>
            <input type="text" name="nome" class="form-control input-sm"
                   value="{{ isset($registro->nome)? $registro->nome : ''  }}" required>
        </div>
    </div>
    <div class="input-field">
        <div class="form-group fg-line">
            <label>Estado:</label>
            <input type="text" name="estado" class="form-control input-sm"
                   value="{{ isset($registro->estado)? $registro->estado : ''  }}">
        </div>
    </div>
    <div class="input-field">
        <div class="form-group fg-line">
            <label>Sigla do Estado:</label>
            <input type="text" name="sigla_estado" class="form-control input-sm"
                   value="{{ isset($registro->sigla_estado)? $registro->sigla_estado : ''  }}">
        </div>
    </div>
</div>