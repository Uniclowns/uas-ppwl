<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Agen;
use App\Models\Properti;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Agen::factory(50)->create();
        Properti::factory(100)->create();

        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            SuperAdminSeeder::class,
        ]); 
    }
}
