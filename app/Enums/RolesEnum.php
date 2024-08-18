<?php

namespace App\Enums;

enum RolesEnum: string
{
    case ADMIN = 'admin';
    case INSTRUCTOR = 'instructor';
    case STUDENT = 'student';
    case GUEST = 'guest';
}
