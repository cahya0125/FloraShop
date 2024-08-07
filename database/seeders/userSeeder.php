<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'caca',
            'email' => 'caca@gmail.com',
            'password' => bcrypt('12345678'),
            'isAdmin' => 1,
        ]);
        User::create([
            'name' => 'tessa',
            'email' => 'tessa@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
