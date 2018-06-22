<?php

use Illuminate\Database\Seeder;

class AcomodacoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acomodacaos')->insert([
            [
                'endereco_id' => 1,
                'anfitriao_id' => 1,
                'nome' => 'Choupana Alegrete',
                'qtd_quartos' => 1,
                'qtd_banheiros' => 1,
                'qtd_camas' => 2,
                'descricao' => 'Casinha Singela',
                'valor' => 24,
                'cancelamento' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'endereco_id' => 2,
                'anfitriao_id' => 2,
                'nome' => 'Casinha Alegrete',
                'qtd_quartos' => 1,
                'qtd_banheiros' => 1,
                'qtd_camas' => 2,
                'descricao' => 'Casinha Boa',
                'valor' => 50,
                'cancelamento' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'endereco_id' => 3,
                'anfitriao_id' => 3,
                'nome' => 'Casa Bela',
                'qtd_quartos' => 1,
                'qtd_banheiros' => 1,
                'qtd_camas' => 2,
                'descricao' => 'Bom Lugar',
                'valor' => 24,
                'cancelamento' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'endereco_id' => 4,
                'anfitriao_id' => 4,
                'nome' => 'Chaca dos Sonhos',
                'qtd_quartos' => 1,
                'qtd_banheiros' => 1,
                'qtd_camas' => 2,
                'descricao' => 'Otima Localizaçao',
                'valor' => 30,
                'cancelamento' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'endereco_id' => 5,
                'anfitriao_id' => 5,
                'nome' => 'Lugar Massa',
                'qtd_quartos' => 1,
                'qtd_banheiros' => 1,
                'qtd_camas' => 2,
                'descricao' => 'Lugar Massa Mesmo',
                'valor' => 24,
                'cancelamento' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'endereco_id' => 6,
                'anfitriao_id' => 6,
                'nome' => 'Boulevard Hostel',
                'qtd_quartos' => 1,
                'qtd_banheiros' => 1,
                'qtd_camas' => 2,
                'descricao' => 'Hostel',
                'valor' => 80,
                'cancelamento' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
