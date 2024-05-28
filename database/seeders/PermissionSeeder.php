<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = [
            'create-properti',
            'show-properti',
            'edit-properti',
            'delete-properti',
            'create-agen',
            'edit-agen',
            'show-agen',
            'delete-agen',
        ];

        foreach ($permission as $permissions)
        {
           Permission::create(['name' => $permissions]);
        }
    }
}
