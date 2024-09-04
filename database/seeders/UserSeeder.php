<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'      => 'Administrator 1',
            'email'     => 'admin1@example.com',
            'password'  => Hash::make('password'),
            'role'      => 'admin'
        ]);
        User::create([
            'name'      => 'Administrator 2',
            'email'     => 'admin2@example.com',
            'password'  => bcrypt('password'),
            'role'      => 'admin'
        ]);

        User::create([
            'name'      => 'Operator 1',
            'email'     => 'opt1@example.com',
            'password'  => bcrypt('password'),
            'role'      => 'operator'
        ]);

        User::create([
            'name'      => 'Anwar Client',
            'email'     => 'anwar@example.com',
            'password'  => bcrypt('password'),
            'role'      => 'user'
        ]);

        User::create([
            'name'      => 'Harun Client',
            'email'     => 'harun@example.com',
            'password'  => bcrypt('password'),
            'role'      => 'user'
        ]);
    }
}
