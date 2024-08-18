<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssignPermissionsToRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define roles and the associated permissions
        $rolesPermissions = [
            RolesEnum::ADMIN->value => Permission::all(), // Admin has all permissions
            RolesEnum::INSTRUCTOR->value => [
                'view courses', 'create courses', 'edit courses', 'delete courses',
                'manage course modules', 'manage course lessons',
                'manage course quizzes', 'manage course assignments',
                'view enrollments', 'view progress',
                'upload media', 'delete media', 'stream media', 'download resources',
                'create quizzes', 'edit quizzes', 'delete quizzes',
                'grade quizzes', 'view quiz results', 'randomize quizzes',
                'view certificates', 'issue certificates', 'view forums',
                'schedule live classes', 'start live classes', 'record live classes',
                'view analytics', 'generate reports', 'view performance',
            ],
            RolesEnum::STUDENT->value => [
                'view courses', 'view progress',
                'stream media', 'download resources',
                'post in forums', 'view forum posts', 'view forums', 'edit forum posts',
                'join live classes', 'view live class recordings',
                'view analytics', 'view performance',
            ],
            RolesEnum::GUEST->value => [
                'view courses',
            ],
        ];

        // Assign permissions to roles
        foreach ($rolesPermissions as $roleName => $permissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->syncPermissions($permissions);
        }
    }
}
