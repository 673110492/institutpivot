<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = \App\Models\User::create([
            'noms' => "Admin admin",
            'email' => 'admin@gmail.com',
            'password' =>  bcrypt('admin'),
            'remember_token' => Str::random(10),
            'type' => 'admin',

        ]);

        $admin->save();
    }
}
