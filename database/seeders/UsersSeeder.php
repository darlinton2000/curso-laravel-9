<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Darlinton Luis Siqueira',
            'email' => 'darlinton2000@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
