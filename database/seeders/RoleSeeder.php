<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


public function run()
{
    // Membuat Permission
    Permission::create(['name' => 'edit']);
    
    // Membuat Role
    $adminRole = Role::create(['name' => 'Admin']);
    $mahasiswaRole = Role::create(['name' => 'Mahasiswa']);
    
    // Memberikan permission ke role
    $adminRole->givePermissionTo('edit');
    
    // Menambahkan role ke user
    $user = \App\Models\User::find(1);
    $user->assignRole('Admin');
}}