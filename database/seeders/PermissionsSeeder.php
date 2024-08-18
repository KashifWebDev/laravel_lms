<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // List of all permissions
        $permissions = [
            // User Management
            'view users', 'create users', 'edit users', 'delete users',
            'assign roles', 'revoke roles', 'view roles',

            // Role Management
            'create roles', 'edit roles', 'delete roles',
            'assign permissions', 'revoke permissions', 'view permissions',

            // Course Management
            'view courses', 'create courses', 'edit courses', 'delete courses',
            'manage course modules', 'manage course lessons',
            'manage course quizzes', 'manage course assignments',

            // Enrollment Management
            'view enrollments', 'manage enrollments', 'approve enrollments', 'view progress',

            // Content Delivery
            'upload media', 'delete media', 'stream media', 'download resources',

            // Quiz and Assessment Management
            'create quizzes', 'edit quizzes', 'delete quizzes',
            'grade quizzes', 'view quiz results', 'randomize quizzes',

            // Certificate Management
            'view certificates', 'issue certificates', 'revoke certificates',

            // Discussion and Collaboration
            'view forums', 'create forums', 'moderate forums', 'delete forums',
            'post in forums', 'view forum posts', 'edit forum posts', 'delete forum posts',

            // Real-Time Collaboration
            'schedule live classes', 'start live classes', 'join live classes',
            'record live classes', 'view live class recordings',

            // Analytics and Reporting
            'view analytics', 'generate reports', 'view performance',

            // Payment and Monetization
            'manage payments', 'view transactions', 'manage subscriptions',
            'create discount codes', 'apply discount codes',

            // Gamification
            'manage badges', 'award badges', 'view leaderboards',

            // Notifications and Reminders
            'manage notifications', 'view notifications', 'send notifications', 'manage reminders',

            // API and Webhooks
            'view api', 'create api tokens', 'revoke api tokens',
            'manage webhooks', 'delete webhooks',

            // Audit and Security
            'view audit logs', 'manage security settings', 'export data', 'import data',
        ];

        // Create each permission
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
