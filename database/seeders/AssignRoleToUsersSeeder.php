<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AssignRoleToUsersSeeder extends Seeder
{
    public function run(): void
    {
        $dummyUsers = [
            ['name' => 'Admin', 'email' => 'a@lms.com', 'role' => RolesEnum::ADMIN],
            ['name' => 'Instructor', 'email' => 'i@lms.com', 'role' => RolesEnum::INSTRUCTOR],
            ['name' => 'Student', 'email' => 's@lms.com', 'role' => RolesEnum::STUDENT],
            ['name' => 'Guest', 'email' => 'g@lms.com', 'role' => RolesEnum::GUEST],
        ];

        foreach ($dummyUsers as $dummyUser) {
            $user = User::create([
                'name' => $dummyUser['name'],
                'email' => $dummyUser['email'],
                'password' => Hash::make('password'),
            ]);

            $user->assignRole($dummyUser['role']);
        }
    }
}
