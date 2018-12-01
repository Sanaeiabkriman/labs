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
            'user_id'=>'1',
            'etat_id'=>'1',
        ]);
        DB::table('categories')->insert([
            'categorie'=> 'Kefta',
            'user_id'=>'1',
            'etat_id'=>'1',

        ]);
        DB::table('categories')->insert([
            'categorie'=> 'Salut',
            'user_id'=>'1',
            'etat_id'=>'1',
        ]);
    }
}
