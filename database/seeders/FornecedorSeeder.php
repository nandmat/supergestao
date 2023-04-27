<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Instanciando o Objeto
        $fornecedor = new Fornecedor();

        $fornecedor->nome = 'Cabaré do Zé Barata';
        $fornecedor->site = 'contato@zebarata.com.br';
        $fornecedor->uf = 'PI';
        $fornecedor->email = 'zebarataeventos@gmail.com';
        $fornecedor->save();

        //Utilizando o método create()
        Fornecedor::create([
            'nome'=>'Delegacia',
            'site'=>'delegaciaimperatriz.com.br',
            'uf'=>'CE',
            'email'=>'delegacia@gmail.com'
        ]);

        //método insert
        DB::table('fornecedores')->insert([
            'nome'=>'motogiro',
            'site'=>'motogiroimperatriz.com.br',
            'uf'=>'CE',
            'email'=>'motogiro@gmail.com'
        ]);
    }
}
