<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\JenisPaket;
use App\Models\User;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin role and assign permissions
        $role = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);

        // Create admin user
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@wedding.com',
            'password' => bcrypt('qweqweqwe'),
            'email_verified_at' => now()
        ]);

        $user->assignRole($role);

        $jenisPakets = [
            ['nama' => 'Rekomendasi', 'slug' => 'rekomendasi'],
            ['nama' => 'Tema', 'slug' => 'tema'],
            ['nama' => 'Catering', 'slug' => 'catering'],
            ['nama' => 'Entertaiment', 'slug' => 'entertaiment'],
            ['nama' => 'Dekorasi', 'slug' => 'dekorasi'],
            ['nama' => 'Dokumentasi', 'slug' => 'dokumentasi'],
        ];

        foreach ($jenisPakets as $jenisPaket) {
            JenisPaket::create($jenisPaket);
        }
    }
}

