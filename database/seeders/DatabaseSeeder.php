<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use function config;
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
        User::factory(30)->create();

        $admin = [
            'name' => 'Admin User',
            'email' => 'admin@local.com',
            'password' => bcrypt('password@123'),
            'role' => 'admin',
        ];

        $super = [
            'name' => 'Superadmin User',
            'email' => 'superadmin@local.com',
            'password' => bcrypt('password@123'),
            'role' => 'superadmin',
        ];

        if (config('app.use_uuid')) {
            $admin['id'] = (string) Str::uuid();
            $super['id'] = (string) Str::uuid();
        }

        User::factory()->create($admin);
        User::factory()->create($super);
    }
}
