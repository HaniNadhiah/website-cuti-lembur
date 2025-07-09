<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'adminHr',
            'id_karyawan'=> '001',
            'email' => 'adminHr@gmail.com',
            'password' => Hash::make('1234567'),
            'department' => 'adminHr',
            'role' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Lala',
            'id_karyawan' => '015',
            'email' => 'lala321@gmail.com',
            'password' => Hash::make('1234567'),
            'department' => 'IT',
            'role' => 2
        ]);

        DB::table('users')->insert([
            'name' => 'Rara',
            'id_karyawan' => '007',
            'email' => 'Raniaaa@gmail.com',
            'password' => Hash::make('1234567'),
            'department' => 'IT',
            'role' => 3
        ]);

        DB::table('users')->insert([
            'name' => 'Raka',
            'id_karyawan' => '017',
            'email' => 'Rakaaja@gmail.com',
            'password' => Hash::make('1234567'),
            'department' => 'Produksi',
            'role' => 4
        ]);
    }
}
