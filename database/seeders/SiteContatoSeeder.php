<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        SiteContato::create([
            "nome" => "Sistema SG",
            "telefone" => "(86) 9 9999-9999",
            "motivo_contato" => 1,
            "email" => "contato@sistemasg.com.br",
            "mensagem" => "Seja bem-vindo ao Sistema Super Gestão", 
        ]);
        */

        SiteContato::factory(100)->create();
    }
}
