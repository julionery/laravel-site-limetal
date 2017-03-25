<div class="row" style="padding: 20px">
    <div class="col-sm-9">
        <p>Campos com <font color="red">*</font> são obrigatórios!</p>
    </div>
    <div class="col-sm-1">
        <label>Ativo?</label>
    </div>
        <div class="col-sm-2">
        <select class="selectpicker" name="ativo">
            <option value="nao" {{(isset($usuario->ativo) && $usuario->ativo == 'nao' ? 'selected' : "")}}>Não
            </option>
            <option value="sim" {{(isset($usuario->ativo) && $usuario->ativo == 'sim' ? 'selected' : "")}}>Sim
            </option>
        </select>
    </div>
</div>
<div class="container">
    <div class="input-field">
        <div class="form-group fg-line">
            <label>Nome: *</label>
            <input type="text" name="nome" class="form-control input-sm"
                   value="{{ isset($usuario->name)? $usuario->name : ''  }}" required>
        </div>
    </div>
    <div class="input-field">
        <div class="form-group fg-line">
            <label>E-mail *</label>
            <input type="email" name="email" class="form-control input-sm"
                   placeholder="exemplo@mail.com" value="{{ isset($usuario->email)? $usuario->email : ''  }}" required>
        </div>
    </div>
    <div class="input-field">
        <div class="form-group fg-line">
            <label>Senha *</label>
            <input type="password" name="password" class="form-control input-sm"
                   placeholder="******">
        </div>
    </div>
</div>