<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Instanciando o Objeto e salvando no DB
        $fornecedor = new Fornecedor();
        $fornecedor->nome = "Fornecedor Teste";
        $fornecedor->uf = "PI";
        $fornecedor->site = "fornecedorteste.com.br";
        $fornecedor->email = "contato@fornecedor.com.br";
        $fornecedor->save();

        // Usando o Create
        Fornecedor::create([
            "nome" => "Fornecedor Teste 02",
            "uf" => "PI",
            "site" => "fornecedorteste02.com.br",
            "email" => "contato@fornecedorteste02.com.br",
        ]);

        // Utilizando o INSERT
        DB::table('fornecedores')->insert([
            "nome" => "Fornecedor Teste 03",
            "uf" => "PI",
            "site" => "fornecedorteste03.com.br",
            "email" => "contato@fornecedorteste02.com.br",
        ]);
    }
}
