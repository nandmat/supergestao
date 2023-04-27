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
        $contato = new SiteContato();
        $contato->nome = 'Matheus';
        $contato->telefone = '(99)9999-0909';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Mais informações sobre faturamento';
        $contato->save();

        SiteContato::create([
            'nome'=>'Artur',
            'telefone'=>'(99)9999-0987',
            'email'=>'artur@supergestao.com.br',
            'motivo_contato'=>2,
            'mensagem'=>'Informações sobre performace'
        ]);
    }
}
