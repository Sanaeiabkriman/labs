<?php

use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'categorie'=> 'Caca',
            'etat_id'=>'1',
        ]);
        DB::table('categories')->insert([
            'categorie'=> 'Kefta',
            'etat_id'=>'1',

        ]);
        DB::table('categories')->insert([
            'categorie'=> 'Salut',
            'etat_id'=>'1',
        ]);
    }
}
