<?php

use Illuminate\Database\Seeder;

class ProjetSeedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projets')->insert([
            'titre'=> 'Projet 1',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
            'icone_id'=> '2',
            'image'=>"1542583209cRqtzkU2abtfKKF1nQx1kau3QCruYLKwkFuMQgDS.jpeg",
        ]);
        DB::table('projets')->insert([
            'titre'=> 'Projet 2',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
            'icone_id'=> '2',
            'image'=>"1542583209cRqtzkU2abtfKKF1nQx1kau3QCruYLKwkFuMQgDS.jpeg",
        ]);
        DB::table('projets')->insert([
            'titre'=> 'Projet 3',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
            'icone_id'=> '2',
            'image'=>"1542583209cRqtzkU2abtfKKF1nQx1kau3QCruYLKwkFuMQgDS.jpeg",
        ]);
        DB::table('projets')->insert([
            'titre'=> 'Projet 4',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
            'icone_id'=> '2',
            'image'=>"1542583209cRqtzkU2abtfKKF1nQx1kau3QCruYLKwkFuMQgDS.jpeg",
        ]);
        DB::table('projets')->insert([
            'titre'=> 'Projet 5',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
            'icone_id'=> '2',
            'image'=>"1542583209cRqtzkU2abtfKKF1nQx1kau3QCruYLKwkFuMQgDS.jpeg",
        ]);
        DB::table('projets')->insert([
            'titre'=> 'Projet 6',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
            'icone_id'=> '2',
            'image'=>"1542583209cRqtzkU2abtfKKF1nQx1kau3QCruYLKwkFuMQgDS.jpeg",
        ]);
    }
}
