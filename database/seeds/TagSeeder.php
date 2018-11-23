<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'tag'=> 'Nature',
            'etat_id'=>'3',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Mort',
            'etat_id'=>'3',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Blog',
            'etat_id'=>'3',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Influenceuses',
            'etat_id'=>'3',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Parfum',
            'etat_id'=>'3',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Louche',
            'etat_id'=>'3',
        ]);
    }
}
