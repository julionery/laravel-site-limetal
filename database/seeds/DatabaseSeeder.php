<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PapelTableSeeder::class);
        $this->call(PermissaoTableSeeder::class);
        $this->call(PaginaTableSeeder::class);
    }
}
