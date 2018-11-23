<?php

use Illuminate\Database\Seeder;

class TestimoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'text'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est',
            'client_id' => "1",
        ]);
        DB::table('testimonials')->insert([
            'text'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est',
            'client_id' => "2",
        ]);
        DB::table('testimonials')->insert([
            'text'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est',
            'client_id' => "3",
        ]);
    }
}
