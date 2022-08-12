<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@dev.com';
        $user->password = Hash::make('password');
        $user->save();

        $roles = Role::get();
        foreach ($roles as $role) {
            $userRole = new RoleUser();
            $userRole->user_id = $user->save();
            $userRole->role_id = $role->id;
            $userRole->save();
        }
    }
}
