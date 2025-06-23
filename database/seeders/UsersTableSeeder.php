<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
             'name' => 'adesh',
        'email' => 'adi@gmaile.com',
        'age' => '20',
        'role' => 'admin',
        'password' => bcrypt('456'),
        'created_at' => now(),
        'updated_at' => now(),
        ]);
    }
}
