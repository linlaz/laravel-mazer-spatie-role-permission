<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\ConfigSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleAndPermission::class);
        $user = User::create([
            'name' => 'super-admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole('super-admin');

        $user1 = User::create([
            'name' => 'pengguna',
            'email' => 'pengguna@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $user1->assignRole('pengguna');
    }
}