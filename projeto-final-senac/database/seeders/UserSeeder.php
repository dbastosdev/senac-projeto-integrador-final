<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::all()
            ->pluck('id', 'name');

        $users = [
            [
                'email' => 'bebeto@gmail.com',
                'name' => 'Bebeto Silva',
                'role_id' => $roles['administrador'],
                'password' => bcrypt('123456'),
            ],
            [
                'email' => 'romario@gmail.com',
                'name' => 'Romário Silva',
                'role_id' => $roles['administrador'],
                'password' => bcrypt('123456'),
            ],
		];

		foreach ($users as $user) {
            $new_user = User::updateOrCreate(
           		['email' => $user['email']], 
           		$user
       		);
            $new_user->save();
        }
    }
}
