<?php

namespace Database\Seeders;

use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $roles = [
            ['name' => 'usuario'],
            ['name' => 'administrador'],
        ];

        $roles_insert = [];

        foreach ($roles as $role) {
            if (!DB::table('roles')->where('name', $role['name'])->first()) {
                array_push($roles_insert, $role);
            }
        }

        DB::connection('mysql')->table('roles')->insert($roles_insert);
    }
}
