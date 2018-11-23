<?php

use Illuminate\Database\Seeder;

class CoordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coordonnees')->insert([
            'titre1' => "Get in <span>the Lab</span> and discover the world",
            'texte' => "Lorem ipsum dolor sit amet,",
            'titre2'=>"Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. ",
            'adresse'=>"Rue de la truc much 1000 jdkeje 44",
            'num'=>"+4 445454 +545 44",
            'mail'=>"zfz@dzd.cll",

        ]);
    }
}
