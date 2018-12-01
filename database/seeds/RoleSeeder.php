<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role'=> 'Admin',
        ]);
        DB::table('roles')->insert([
            'role'=> 'Editeur',
        ]);
        DB::table('roles')->insert([
            'role'=> 'Visiteur',
        ]);
    }
}
