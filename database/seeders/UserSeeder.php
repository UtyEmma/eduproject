<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        User::create([
            'firstname' => 'Super',
            'lastname' => 'Admin',
            'email' => 'admin@localhost.com',
            'role' => Role::SUPER_ADMIN,
            'password' => '1234567890',
            'email_verified_at' => now()
        ]);
    }
}
