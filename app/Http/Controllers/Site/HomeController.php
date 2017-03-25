<?php

namespace App\Http\Controllers\Site;

use App\Models\Configuracao;
use App\Models\Equipe;
use App\Models\Pagina;
use App\Models\Portfolio;
use App\Models\Servico;
use App\Models\Sobre;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    public function index()
    {
        $header = Pagina::where('tipo', '=', 'header')->first();
        $portfolio = Pagina::where('tipo', '=', 'portfolio')->first();
        $servicos = Pagina::where('tipo', '=', 'servicos')->first();
        $sobre = Pagina::where('tipo', '=', 'sobre')->first();
        $equipe = Pagina::where('tipo', '=', 'equipe')->first();
        $contato = Pagina::where('tipo', '=', 'contato')->first();

        $trabalhos = Portfolio::where('publicar', '=', 'sim')->orderBy('id', 'desc')->take(8)->get();
        $servicosInfo = Servico::where('publicar', '=', 'sim')->orderBy('id', 'desc')->take(6)->get();
        $sobreInfo = Sobre::where('publicar', '=', 'sim')->orderBy('id', 'asc')->take(8)->get();
        $equipeInfo = Equipe::where('publicar', '=', 'sim')->orderBy('id', 'desc')->take(3)->get();

        $configuracao = Configuracao::all()->first();


        $cont = true;
        foreach ($sobreInfo as $sobreItem) {
            if ($cont) {
                $sobreItem['cont'] = 1;
                $cont = false;
            } else {
                $sobreItem['cont'] = 2;
                $cont = true;
            }
        }

        return view('welcome', compact('header', 'portfolio', 'servicos', 'sobre', 'equipe', 'contato', 'trabalhos', 'servicosInfo', 'sobreInfo', 'equipeInfo', 'configuracao'));
    }

    public function busca(Request $request)
    {
        $busca = $request->all();
        $paginacao = false;

        $tipos = Tipo::orderBy('titulo')->get();
        $cidades = Cidade::orderBy('nome')->get();

        if ($busca['status'] == 'todos') {
            $testeStatus = [
                ['status', '<>', null]
            ];
        } else {
            $testeStatus = [
                ['status', '=', $busca['status']]
            ];
        }
        if ($busca['tipo_id'] == 'todos') {
            $testeTipo = [
                ['tipo_id', '<>', null]
            ];
        } else {
            $testeTipo = [
                ['tipo_id', '=', $busca['tipo_id']]
            ];
        }
        if ($busca['cidade_id'] == 'todos') {
            $testeCidade = [
                ['cidade_id', '<>', null]
            ];
        } else {
            $testeCidade = [
                ['cidade_id', '=', $busca['cidade_id']]
            ];
        }

        $testeDorm = [
            ['dormitorios', '>=', 0],
            ['dormitorios', '=', 1],
            ['dormitorios', '=', 2],
            ['dormitorios', '=', 3],
            ['dormitorios', '>', 3],
        ];
        $numDorm = $busca['dormitorios'];

        $testeValor = [
            [['valor', '>=', '0']],
            [['valor', '<=', '500']],
            [['valor', '>=', '500'], ['valor', '<=', '1000']],
            [['valor', '>=', '1000'], ['valor', '<=', '5000']],
            [['valor', '>=', '5000'], ['valor', '<=', '10000']],
            [['valor', '>=', '10000'], ['valor', '<=', '50000']],
            [['valor', '>=', '50000'], ['valor', '<=', '100000']],
            [['valor', '>=', '100000'], ['valor', '<=', '200000']],
            [['valor', '>=', '200000'], ['valor', '<=', '300000']],
            [['valor', '>=', '300000'], ['valor', '<=', '500000']],
            [['valor', '>=', '500000'], ['valor', '<=', '1000000']],
            [['valor', '>=', '1000000']]

        ];
        $numValor = $busca['valor'];

        if ($busca['bairro'] != '') {
            $testeBairro = [
                ['endereco', 'like', '%' . $busca['bairro'] . '%']
            ];
        } else {
            $testeBairro = [
                ['endereco', '<>', null]
            ];
        }

        $imoveis = Imovel::where('publicar', '=', 'sim')
            ->where($testeStatus)
            ->where($testeTipo)
            ->where($testeCidade)
            ->where([$testeDorm[$numDorm]])
            ->where($testeValor[$numValor])
            ->where($testeBairro)
            ->orderBy('id', 'desc')->get();


        return view('site.busca', compact('busca', 'imoveis', 'paginacao', 'tipos', 'cidades'));
    }

    public function enviarContato(Request $request)
    {
        $sobre = Pagina::where('tipo', '=', 'contato')->first();
        $email = $sobre->email;

        \Mail::send('emails.contato', ['request' => $request], function($m) use ($request, $email){
            $m->from($request['email'], $request['nome']);
            $m->replyTo($request['email'], $request['nome']);
            $m->subject("Contato pelo Site");
            $m->to($email, 'Contato do Site');
        });

        \Session::flash('mensagem', [
            'msg' => 'Contato enviado com sucesso!',
            'class' => 'green white-text'
        ]);

        return redirect()->route('site.home');
    }
}
