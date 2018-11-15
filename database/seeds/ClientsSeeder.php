<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'nom' => "Michael Smith",
            'fonction' => "CEO compagny",
            'photo'=>"1.jpg",
        ]);
        DB::table('clients')->insert([
            'nom' => "Michael Smith",
            'fonction' => "CEO compagny",
            'photo'=>"2.jpg",
        ]);
        DB::table('clients')->insert([
            'nom' => "Michael Smith",
            'fonction' => "CEO compagny",
            'photo'=>"3.jpg",
        ]);
    }
}
