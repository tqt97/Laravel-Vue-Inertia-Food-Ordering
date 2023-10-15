<?php

namespace Database\Seeders;

use App\Enums\RoleName;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }

    public function createAdminUser()
    {
        User::create([
            'name'     => 'Super admin',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('12341234'),
        ])->roles()->sync(Role::where('name', RoleName::ADMIN->value)->first());
    }
}
