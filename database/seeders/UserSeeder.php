<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Martin Salvador Gaytan Lugo',
            'email' => 'martingaytan.lugo@gmail.com',
            'password' => bcrypt('chavin12345')
        ])->assignRole('Admin');
        User::factory(5)->create();
    }
}
