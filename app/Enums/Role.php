<?php

namespace App\Enums;

enum Role:string {

    case ADMIN = 'admin';
    case SUPER_ADMIN = 'super_admin';
    case TEACHER = 'teacher';

    function label(){
        return match ($this) {
            self::ADMIN => 'Administrator',
            self::SUPER_ADMIN => 'Super Administrator',
            self::TEACHER => 'Teacher',
        };
    }

}