<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory('App\User',10)->create();
        factory('App\User')->create([
            'role_id' => 3,
            'name'    => 'bellnaja',
            'email'   => str_random(10).'@gmail.com',
            'password'=> bcrypt('secret'),
            'remember_token' => str_random(10)

        ]);
    }
}
