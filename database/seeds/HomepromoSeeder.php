<?php

use Illuminate\Database\Seeder;

class HomepromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homepromos')->insert([
            'titre'=> 'Are you ready to stand out?',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
        ]);
        
    }
}
