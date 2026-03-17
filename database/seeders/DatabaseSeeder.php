<?php

namespace Database\Seeders;

use App\Models\User;
use App\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Dev',
            'email' => 'dev@mail.com',
            'role' => UserRole::SUPER_ADMIN,
            'position' => 'developer',
            'password' => 'dev123',
        ]);
        User::factory()->create([
            'name' => 'Ketua',
            'email' => 'ketua@mail.com',
            'role' => UserRole::TAKMIR_ADMIN,
            'position' => 'ketua',
            'password' => 'ketua123',
        ]);
        User::factory()->create([
            'name' => 'Sekretaris',
            'email' => 'sekretaris@mail.com',
            'role' => UserRole::TAKMIR_ADMIN,
            'position' => 'sekretaris',
            'password' => 'sekretaris123',
        ]);
        User::factory()->create([
            'name' => 'Bendahara',
            'email' => 'bendahara@mail.com',
            'role' => UserRole::TAKMIR_ADMIN,
            'position' => 'bendahara',
            'password' => 'bendahara123',
        ]);
    }
}