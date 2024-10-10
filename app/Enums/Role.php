<?php

namespace App\Enums;

enum Role:string {

    case ADMIN = 'admin';
    case SUPER_ADMIN = 'super_admin';
    case TEACHER = 'teacher';

}