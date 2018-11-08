<?php

use Illuminate\Database\Seeder;

class HomeintroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homeintros')->insert([
            'texte' => 'Get your freebie template now!',
            'bg1' => "public/images/thumbnails/01.jpg",
            'bg2'=>"public/images/thumbnails/02.jpg",
        ]);
    }
}
