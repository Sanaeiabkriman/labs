<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(HomeintroSeeder::class);
        $this->call(HomeaboutSeeder::class);
        $this->call(HomepromoSeeder::class);
        $this->call(ClientsSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(IconesSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(EtatSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(ProjetSeeder::class);
        $this->call(CatSeeder::class);
        $this->call(TestimoSeeder::class);
        $this->call(CoordSeeder::class);

    }
}
