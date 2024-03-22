<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teste;

class TesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Teste::create([
            'nome' => "Marlon Gomes",
            'cpf'=> '07488899904',
            'peso' => 86,
            'idade' => 36,
            'data_nascimento' => '1987-06-25'
        ]);
    }
}
