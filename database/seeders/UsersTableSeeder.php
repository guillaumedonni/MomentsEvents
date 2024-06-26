<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'personneLogin' => 'admin',
            'password' => Hash::make('admin'),
            'personneNom' => 'admin',
            'personneEmail' => 'admin@admin.com',
            'role' => 'admin',
        ]);
    }
}
