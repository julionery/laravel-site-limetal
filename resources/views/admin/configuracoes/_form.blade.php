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
                    <label>Nome Empresa: *</label>
                    <input type="text" class="form-control" name="nomeEmpresa" required
                           value="{{ isset($registro->nomeEmpresa)? $registro->nomeEmpresa : ''  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Título:</label>
                    <input type="text" class="form-control" name="titulo"
                           value="{{ isset($registro->titulo)? $registro->titulo : ''  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Descrição:</label>
                    <input type="text" class="form-control" name="descricao"
                           value="{{ (isset($registro->descricao)? $registro->descricao : '')  }}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control"
                           value="{{ (isset($registro->endereco)? $registro->endereco : '')  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control"
                           value="{{ (isset($registro->email)? $registro->email : '')  }}">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Telefone 1:</label>
                    <input type="text" name="telefone1" class="form-control"
                           value="{{ (isset($registro->telefone1)? $registro->telefone1 : '')  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Telefone 2:</label>
                    <input type="text" name="telefone2" class="form-control"
                           value="{{ (isset($registro->telefone2)? $registro->telefone2 : '')  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Link:</label>
                    <input type="text" name="link" class="form-control"
                           value="{{ (isset($registro->link)? $registro->link : '')  }}">
                </div>
            </div>
        </div>
    </div>

    Redes Sociais:
    <br />
    <br />

    <div class="row">
        <div class="col-sm-3">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Facebook:</label>
                    <input type="text" name="facebook" class="form-control"
                           value="{{ (isset($registro->facebook)? $registro->facebook : '')  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>LinkedIn:</label>
                    <input type="text" name="linkedin" class="form-control"
                           value="{{ (isset($registro->linkedin)? $registro->linkedin : '')  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Twitter:</label>
                    <input type="text" name="twitter" class="form-control"
                           value="{{ (isset($registro->twitter)? $registro->twitter : '')  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Youtube:</label>
                    <input type="text" name="youtube" class="form-control"
                           value="{{ (isset($registro->youtube)? $registro->youtube : '')  }}">
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Texto Inicial da História do Sorbe:</label>
                    <input type="text" name="textoInicialSobre" class="form-control"
                           value="{{ (isset($registro->textoInicialSobre)? $registro->textoInicialSobre : '')  }}">
                </div>
            </div>
        </div>
    </div>

    Títulos Menu:
    <br />
    <br />
    <div class="row">
        <div class="col-sm-2">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Item Menu 1:</label>
                    <input type="text" name="itemMenu1" class="form-control"
                           value="{{ (isset($registro->itemMenu1)? $registro->itemMenu1 : '')  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Item Menu 2:</label>
                    <input type="text" name="itemMenu2" class="form-control"
                           value="{{ (isset($registro->itemMenu2)? $registro->itemMenu2 : '')  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Item Menu 3:</label>
                    <input type="text" name="itemMenu3" class="form-control"
                           value="{{ (isset($registro->itemMenu3)? $registro->itemMenu3 : '')  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Item Menu 4:</label>
                    <input type="text" name="itemMenu4" class="form-control"
                           value="{{ (isset($registro->itemMenu4)? $registro->itemMenu4 : '')  }}">
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Item Menu 5:</label>
                    <input type="text" name="itemMenu5" class="form-control"
                           value="{{ (isset($registro->itemMenu5)? $registro->itemMenu5 : '')  }}">
                </div>
            </div>
        </div>
    </div>

    <div class="input-field">
        <div class="form-group fg-line">
            <label>Mapa (Cole o iframe do Google Maps) </label>
            <textarea name="mapa" class="form-control input-sm" rows="5">
                {{ isset($registro->mapa)? $registro->mapa : ''  }}
            </textarea>
        </div>
    </div>
</div>