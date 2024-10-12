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

    static function options(){
        return [
            self::ADMIN->value => self::ADMIN->label(),
            // self::SUPER_ADMIN->value => self::SUPER_ADMIN->label(),
            self::TEACHER->value => self::TEACHER->label(),
        ];
    } 

}