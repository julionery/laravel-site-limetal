<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('login');
});


Route::get('/', ['as'=> 'site.home', 'uses' => 'Site\HomeController@index']);
Route::post('/contato/enviar', ['as'=> 'site.contato.enviar', 'uses'=>'Site\HomeController@enviarContato']);
Route::get('/portfolios/{id}/{titulo?}', ['as'=> 'site.portfolios', 'uses' => 'Site\PortfolioController@index']);
Route::get('/busca', ['as'=> 'site.busca', 'uses' => 'Site\HomeController@busca']);

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'admin.'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::get('/paginas', ['as' => 'paginas', 'uses' => 'Admin\PaginasController@index']);
    Route::get('/paginas/editar/{id}', ['as' => 'paginas.editar', 'uses' => 'Admin\PaginasController@editar']);
    Route::put('/paginas/atualizar/{id}', ['as' => 'paginas.atualizar', 'uses' => 'Admin\PaginasController@atualizar']);

    Route::get('/usuarios', ['as' => 'usuarios', 'uses' => 'Admin\UsuarioController@index']);
    Route::get('/usuarios/adicionar', ['as' => 'usuarios.adicionar', 'uses' => 'Admin\UsuarioController@adicionar']);
    Route::post('/usuarios/salvar', ['as' => 'usuarios.salvar', 'uses' => 'Admin\UsuarioController@salvar']);
    Route::get('/usuarios/editar/{id}', ['as' => 'usuarios.editar', 'uses' => 'Admin\UsuarioController@editar']);
    Route::put('/usuarios/atualizar/{id}', ['as' => 'usuarios.atualizar', 'uses' => 'Admin\UsuarioController@atualizar']);
    Route::get('/usuarios/deletar/{id}', ['as' => 'usuarios.deletar', 'uses' => 'Admin\UsuarioController@deletar']);

    Route::get('/usuario/papel/{id}', ['as' => 'usuario.papel', 'uses' => 'Admin\UsuarioController@papel']);
    Route::post('/usuario/papel/salvar/{id}', ['as' => 'usuario.papel.salvar', 'uses' => 'Admin\UsuarioController@salvarPapel']);
    Route::get('/usuario/papel/remover/{id}/{papel_id}', ['as' => 'usuario.papel.remover', 'uses' => 'Admin\UsuarioController@removerPapel']);

    Route::get('/tipos', ['as' => 'tipos', 'uses' => 'Admin\TipoController@index']);
    Route::get('/tipos/adicionar', ['as' => 'tipos.adicionar', 'uses' => 'Admin\TipoController@adicionar']);
    Route::post('/tipos/salvar', ['as' => 'tipos.salvar', 'uses' => 'Admin\TipoController@salvar']);
    Route::get('/tipos/editar/{id}', ['as' => 'tipos.editar', 'uses' => 'Admin\TipoController@editar']);
    Route::put('/tipos/atualizar/{id}', ['as' => 'tipos.atualizar', 'uses' => 'Admin\TipoController@atualizar']);
    Route::get('/tipos/deletar/{id}', ['as' => 'tipos.deletar', 'uses' => 'Admin\TipoController@deletar']);

    Route::get('/cidades', ['as' => 'cidades', 'uses' => 'Admin\CidadeController@index']);
    Route::get('/cidades/adicionar', ['as' => 'cidades.adicionar', 'uses' => 'Admin\CidadeController@adicionar']);
    Route::post('/cidades/salvar', ['as' => 'cidades.salvar', 'uses' => 'Admin\CidadeController@salvar']);
    Route::get('/cidades/editar/{id}', ['as' => 'cidades.editar', 'uses' => 'Admin\CidadeController@editar']);
    Route::put('/cidades/atualizar/{id}', ['as' => 'cidades.atualizar', 'uses' => 'Admin\CidadeController@atualizar']);
    Route::get('/cidades/deletar/{id}', ['as' => 'cidades.deletar', 'uses' => 'Admin\CidadeController@deletar']);

    Route::get('/papel', ['as' => 'papel', 'uses' => 'Admin\PapelController@index']);
    Route::get('/papel/adicionar', ['as' => 'papel.adicionar', 'uses' => 'Admin\PapelController@adicionar']);
    Route::post('/papel/salvar', ['as' => 'papel.salvar', 'uses' => 'Admin\PapelController@salvar']);
    Route::get('/papel/editar/{id}', ['as' => 'papel.editar', 'uses' => 'Admin\PapelController@editar']);
    Route::put('/papel/atualizar/{id}', ['as' => 'papel.atualizar', 'uses' => 'Admin\PapelController@atualizar']);
    Route::get('/papel/deletar/{id}', ['as' => 'papel.deletar', 'uses' => 'Admin\PapelController@deletar']);

    Route::get('/portfolios', ['as' => 'portfolios', 'uses' => 'Admin\PortfolioController@index']);
    Route::get('/portfolios/adicionar', ['as' => 'portfolios.adicionar', 'uses' => 'Admin\PortfolioController@adicionar']);
    Route::post('/portfolios/salvar', ['as' => 'portfolios.salvar', 'uses' => 'Admin\PortfolioController@salvar']);
    Route::get('/portfolios/editar/{id}', ['as' => 'portfolios.editar', 'uses' => 'Admin\PortfolioController@editar']);
    Route::put('/portfolios/atualizar/{id}', ['as' => 'portfolios.atualizar', 'uses' => 'Admin\PortfolioController@atualizar']);
    Route::get('/portfolios/deletar/{id}', ['as' => 'portfolios.deletar', 'uses' => 'Admin\PortfolioController@deletar']);

    Route::get('/configuracoes', ['as' => 'configuracoes.editar', 'uses' => 'Admin\ConfiguracaoController@editar']);
    Route::put('/configuracoes/atualizar', ['as' => 'configuracoes.atualizar', 'uses' => 'Admin\ConfiguracaoController@atualizar']);

    Route::get('/galerias/{id}', ['as' => 'galerias', 'uses' => 'Admin\GaleriaController@index']);
    Route::get('/galerias/adicionar/{id}', ['as' => 'galerias.adicionar', 'uses' => 'Admin\GaleriaController@adicionar']);
    Route::post('/galerias/salvar/{id}', ['as' => 'galerias.salvar', 'uses' => 'Admin\GaleriaController@salvar']);
    Route::get('/galerias/editar/{id}', ['as' => 'galerias.editar', 'uses' => 'Admin\GaleriaController@editar']);
    Route::put('/galerias/atualizar/{id}', ['as' => 'galerias.atualizar', 'uses' => 'Admin\GaleriaController@atualizar']);
    Route::get('/galerias/deletar/{id}', ['as' => 'galerias.deletar', 'uses' => 'Admin\GaleriaController@deletar']);

    Route::get('/equipe', ['as' => 'equipe', 'uses' => 'Admin\EquipeController@index']);
    Route::get('/equipe/adicionar', ['as' => 'equipe.adicionar', 'uses' => 'Admin\EquipeController@adicionar']);
    Route::post('/equipe/salvar', ['as' => 'equipe.salvar', 'uses' => 'Admin\EquipeController@salvar']);
    Route::get('/equipe/editar/{id}', ['as' => 'equipe.editar', 'uses' => 'Admin\EquipeController@editar']);
    Route::put('/equipe/atualizar/{id}', ['as' => 'equipe.atualizar', 'uses' => 'Admin\EquipeController@atualizar']);
    Route::get('/equipe/deletar/{id}', ['as' => 'equipe.deletar', 'uses' => 'Admin\EquipeController@deletar']);

    Route::get('/servicos', ['as' => 'servicos', 'uses' => 'Admin\ServicoController@index']);
    Route::get('/servicos/adicionar', ['as' => 'servicos.adicionar', 'uses' => 'Admin\ServicoController@adicionar']);
    Route::post('/servicos/salvar', ['as' => 'servicos.salvar', 'uses' => 'Admin\ServicoController@salvar']);
    Route::get('/servicos/editar/{id}', ['as' => 'servicos.editar', 'uses' => 'Admin\ServicoController@editar']);
    Route::put('/servicos/atualizar/{id}', ['as' => 'servicos.atualizar', 'uses' => 'Admin\ServicoController@atualizar']);
    Route::get('/servicos/deletar/{id}', ['as' => 'servicos.deletar', 'uses' => 'Admin\ServicoController@deletar']);

    Route::get('/sobre', ['as' => 'sobre', 'uses' => 'Admin\SobreController@index']);
    Route::get('/sobre/adicionar', ['as' => 'sobre.adicionar', 'uses' => 'Admin\SobreController@adicionar']);
    Route::post('/sobre/salvar', ['as' => 'sobre.salvar', 'uses' => 'Admin\SobreController@salvar']);
    Route::get('/sobre/editar/{id}', ['as' => 'sobre.editar', 'uses' => 'Admin\SobreController@editar']);
    Route::put('/sobre/atualizar/{id}', ['as' => 'sobre.atualizar', 'uses' => 'Admin\SobreController@atualizar']);
    Route::get('/sobre/deletar/{id}', ['as' => 'sobre.deletar', 'uses' => 'Admin\SobreController@deletar']);

    Route::get('/papel/permissao/{id}', ['as' => 'papel.permissao', 'uses' => 'Admin\PapelController@permissao']);
    Route::post('/papel/permissao/salvar/{id}', ['as' => 'papel.permissao.salvar', 'uses' => 'Admin\PapelController@salvarPermissao']);
    Route::get('/papel/permissao/remover/{id}/{permissao_id}', ['as' => 'papel.permissao.remover', 'uses' => 'Admin\PapelController@removerPermissao']);
});
