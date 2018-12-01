<?php

use Illuminate\Database\Seeder;

class EtatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etats')->insert([
            'nom'=> 'Non validé',
        ]);
        DB::table('etats')->insert([
            'nom'=> 'Validé',
        ]);

    }
}
