<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'usuario_id' => 1,
            'name' => 'Tomás',
            'email' => 'admin@admin.com',
            'role' => 'administrador',
            'password' =>Hash::make('admin'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'usuario_id' => 2,
            'name' => 'John',
            'email' => 'john@mail.com',
            'role' => 'usuario',
            'password' =>Hash::make('john123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
    ]);
    }
}
