<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $free = Role::firstOrCreate(['name' => 'free-user']);
        $premium = Role::firstOrCreate(['name' => 'premium-user']);

        $freeContent = Permission::firstOrCreate(['name' => 'watch-free-content']);
        $premiumContent = Permission::firstOrCreate(['name' => 'watch-premium-content']);
        $managePlatform = Permission::firstOrCreate(['name' => 'manage-platform']);

        $admin->givePermissionTo([
            $freeContent,
            $premiumContent,
            $managePlatform
        ]);

        $premium->givePermissionTo([
            $freeContent,
            $premiumContent
        ]);

        $free->givePermissionTo([
            $freeContent
        ]);
    }
}
