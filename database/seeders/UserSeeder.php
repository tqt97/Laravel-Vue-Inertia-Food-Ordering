<?php

namespace Database\Seeders;

use App\Enums\RoleName;
use App\Models\City;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createAdminUser();
        $this->createVendorUser();
    }

    public function createAdminUser()
    {
        User::create([
            'name'     => 'Super admin',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('12341234'),
        ])->roles()->sync(Role::where('name', RoleName::ADMIN->value)->first());
    }

    public function createVendorUser()
    {
        $vendor = User::create([
            'name'     => 'Restaurant owner',
            'email'    => 'vendor@admin.com',
            'password' => bcrypt('12341234'),
        ]);

        $vendor->roles()->sync(Role::where('name', RoleName::VENDOR->value)->first());

        $vendor->restaurant()->create([
            'city_id' => City::where('name', 'Vilnius')->value('id'),
            'name'    => 'Restaurant 001',
            'address' => 'Address SJV14',
        ]);
    }
}
