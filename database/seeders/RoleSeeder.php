<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Translator',
            ],
            [
                'name' => 'isEmailVerified',
            ],
            [
                'name' => 'isVerified',
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
