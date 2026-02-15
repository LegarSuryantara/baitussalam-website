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

        User::updateOrCreate(
            ['email' => 'dev@mail.com'],
            [
                'name' => 'Dev',
                'role' => UserRole::SUPER_ADMIN,
                'position' => 'developer',
                'password' => 'dev123',
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin@mail.com'],
            [
                'name' => 'Bpk.ketua',
                'role' => UserRole::TAKMIR_ADMIN,
                'position' => 'ketua',
                'password' => 'admin123',
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin1@mail.com'],
            [
                'name' => 'Bpk.wakil',
                'role' => UserRole::TAKMIR_ADMIN,
                'position' => 'wakil_ketua',
                'password' => 'admin123',
            ]
        );
    }
}
