<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate(['name' => 'watch-free-content']);
        Permission::firstOrCreate(['name' => 'watch-premium-content']);
        Permission::firstOrCreate(['name' => 'manage-platform']);
    }
}
