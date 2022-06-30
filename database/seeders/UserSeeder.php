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
        $admin = User::create([
            'name' => 'Septemina Waisimon',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
        $admin->attachRole('admin');

        $user = User::create([
            'name' => 'Johan N',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
        ]);
        $user->attachRole('user');
    }
}

