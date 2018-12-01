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
            'user_id'=>'1',
            'etat_id'=>'1',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Mort',
            'user_id'=>'1',
            'etat_id'=>'1',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Blog',
            'user_id'=>'1',
            'etat_id'=>'1',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Influenceuses',
            'user_id'=>'1',
            'etat_id'=>'1',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Parfum',
            'user_id'=>'1',
            'etat_id'=>'1',
        ]);

    }
}
