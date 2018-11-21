<?php

use Illuminate\Database\Seeder;

class IconesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icones')->insert([
            'icone'=> 'flaticon-023-flask',
            'nom'=>'Flask'
        ]);
        DB::table('icones')->insert([
            'icone'=> 'flaticon-011-compass',
            'nom'=>'Compas'
        ]);
        DB::table('icones')->insert([
            'icone'=> 'flaticon-037-idea',
            'nom'=>'Idea'
        ]);
        DB::table('icones')->insert([
            'icone'=> 'flaticon-039-vector',
            'nom'=>'Vector'
        ]);
        DB::table('icones')->insert([
            'icone'=> 'flaticon-036-brainstorming',
            'nom'=>'Brainstorming'
        ]);
        DB::table('icones')->insert([
            'icone'=> 'flaticon-026-search',
            'nom'=>'Search'
        ]);
        DB::table('icones')->insert([
            'icone'=> 'flaticon-018-laptop-1',
            'nom'=>'Laptop'
        ]);
        DB::table('icones')->insert([
            'icone'=> 'flaticon-043-sketch',
            'nom'=>'Sketch'
        ]);
        DB::table('icones')->insert([
            'icone'=> 'flaticon-012-cube',
            'nom'=>'Cube'
        ]);
    }
}
