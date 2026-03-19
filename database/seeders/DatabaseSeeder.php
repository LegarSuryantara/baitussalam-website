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
            'password' => 'developer2026',
        ]);
        User::factory()->create([
            'name' => 'Ketua',
            'email' => 'ketua@mail.com',
            'role' => UserRole::TAKMIR_ADMIN,
            'position' => 'ketua',
            'password' => 'ketua2026',
        ]);
        User::factory()->create([
            'name' => 'Sekretaris',
            'email' => 'sekretaris@mail.com',
            'role' => UserRole::TAKMIR_ADMIN,
            'position' => 'sekretaris',
            'password' => 'sekretaris2026',
        ]);
        User::factory()->create([
            'name' => 'Bendahara',
            'email' => 'bendahara@mail.com',
            'role' => UserRole::BENDAHARA,
            'position' => 'bendahara',
            'password' => 'bendahara2026',
        ]);
        User::factory()->create([
            'name' => 'Bidang Imarah',
            'email' => 'imarah@mail.com',
            'role' => UserRole::IMARAH,
            'position' => 'imarah',
            'password' => 'imarah2026',
        ]);
        User::factory()->create([
            'name' => 'Bidang Idaroh',
            'email' => 'idaroh@mail.com',
            'role' => UserRole::IDAROH,
            'position' => 'idaroh',
            'password' => 'idaroh2026',
        ]);
        User::factory()->create([
            'name' => 'Bidang Riayah',
            'email' => 'riayah@mail.com',
            'role' => UserRole::RIAYAH,
            'position' => 'riayah',
            'password' => 'riayah2026',
        ]);
    }
}