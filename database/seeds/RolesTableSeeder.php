<?php

use Illuminate\Database\Seeder;
use App\Role;
// use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('roles')->insert([
        //     'name'     => str_random(10),
        //     'email'    => str_random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);
        Role::insert([
            ['name' => 'Admin'    ,'description' => 'This is admin'],
            ['name' => 'Director' ,'description' => 'This is director'],
            ['name' => 'Manager'  ,'description' => 'This is manager'],
            ['name' => 'CEO'      ,'description' => 'This is CEO']
        ]);
    }
}
