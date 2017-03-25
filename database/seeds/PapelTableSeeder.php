<?php

use App\Models\Papel;
use Illuminate\Database\Seeder;

class PapelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Papel::where('nome', '=', 'admin')->count())
        {
            $admin = Papel::create([
                'nome' => 'admin',
                'descricao' => 'Administrado do Sistema'
            ]);
        }

        if(!Papel::where('nome', '=', 'gerente')->count())
        {
            $admin = Papel::create([
                'nome' => 'gerente',
                'descricao' => 'Gerente do Sistema'
            ]);
        }

        if(!Papel::where('nome', '=', 'vendedor')->count())
        {
            $admin = Papel::create([
                'nome' => 'vendedor',
                'descricao' => 'Equipe de Vendas'
            ]);
        }
    }
}
