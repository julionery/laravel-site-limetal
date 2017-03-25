<?php

use Illuminate\Database\Seeder;
use App\Models\Pagina;

class PaginaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $existe = Pagina::where('tipo', '=', 'header')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'header')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Bem-vindo ao nosso site!";
        $paginaContato->descricao = "PRAZER EM CONHECÊ-LO.";
        $paginaContato->texto = "Texto adicional sobre a equipe";
        $paginaContato->imagem = "img/modelo_img_home.jpg";

        $paginaContato->tipo = "header";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina header criada com sucesso!";


        $existe = Pagina::where('tipo', '=', 'portfolio')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'portfolio')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Trabalhos Recente";
        $paginaContato->descricao = "Abaixo segue alguns de nossos trabalhos realizados recentemente.";
        $paginaContato->texto = "Texto adicional sobre a equipe";
        $paginaContato->tipo = "portfolio";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina portfolio criada com sucesso!";


        $existe = Pagina::where('tipo', '=', 'servicos')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'servicos')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Nossos serviços";
        $paginaContato->descricao = "Alguns de nossos serviços oferecidos em Iporá e região.";
        $paginaContato->texto = "Texto adicional sobre a equipe";

        $paginaContato->tipo = "servicos";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina servicos criada com sucesso!";

        $existe = Pagina::where('tipo', '=', 'sobre')->count();

        if($existe)
        {
            $paginaSobre = Pagina::where('tipo', '=', 'sobre')->first();
        }
        else
        {
            $paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = "Sobre";
        $paginaSobre->descricao = "Descrição sobre a empresa.";
        $paginaSobre->texto = "Texto sobre a empresa Os PrintF";
        $paginaSobre->tipo = "sobre";

        $paginaSobre->save();

        echo "\nPaginaTableSeeder - Pagina sobre criada com sucesso!";


        $existe = Pagina::where('tipo', '=', 'equipe')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'equipe')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Nossa Equipe";
        $paginaContato->descricao = "Nossa equipe sempre disposta a fazer o melhor por você!";
        $paginaContato->texto = "Texto adicional sobre a equipe";
        $paginaContato->tipo = "equipe";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina equipe criada com sucesso!";

        $existe = Pagina::where('tipo', '=', 'contato')->count();

        if($existe)
        {
            $paginaContato = Pagina::where('tipo', '=', 'contato')->first();
        }
        else
        {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Contato";
        $paginaContato->descricao = "Preencha o formulário";
        $paginaContato->texto = "Contato";
        $paginaContato->email = "juliocesaralmeidanery@gmail.com";
        $paginaContato->mapa = "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1251.6941503024243!2d-51.10613656830984!3d-16.429395499172635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9366bdd03be2c7c3%3A0x53768a425894b6ea!2sAv.+Par%C3%A1%2C+4407+-+Jardim+Monte+Alto%2C+Ipor%C3%A1+-+GO%2C+76200-000!5e1!3m2!1spt-BR!2sbr!4v1489967244575\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>";

        $paginaContato->tipo = "contato";
        $paginaContato->save();

        echo "\nPaginaTableSeeder - Pagina contato criada com sucesso!";

    }
}
