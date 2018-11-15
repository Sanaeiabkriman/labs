<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Sara',
            'email'=> 'Sara@mail.com',
            'password'=> bcrypt('123456'),
            'fonction'=>'Project Manager',
            'role_id'=> '1',
            'photo'=> 'public/images/thumbnails/card-1.jpg',
        ]);
        DB::table('users')->insert([
            'name'=>'Fara',
            'email'=> '>Fara@mail.com',
            'password'=> bcrypt('123456'),
            'fonction'=>'Designer',
            'role_id'=> '1',
            'photo'=> 'public/images/thumbnails/card-1.jpg',
        ]);
        DB::table('users')->insert([
            'name'=> 'Lara',
            'email'=> 'Lara@mail.com',
            'password'=> bcrypt('123456'),
            'fonction'=>'Junior developper',
            'role_id'=> '1',
            'photo'=> 'public/images/thumbnails/card-1.jpg',
        ]);
    }
}
