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
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Mort',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Blog',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Influenceuses',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Parfum',
        ]);
        DB::table('tags')->insert([
            'tag'=> 'Louche',
        ]);
    }
}
