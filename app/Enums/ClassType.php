<?php

namespace App\Enums;

enum ClassType:string {

    case NURSERY = 'nursery';
    case PRIMARY = 'primary';
    case JUNIOR = 'junior';
    case SENIOR = 'senior';

    static function options(){
        return [
            self::NURSERY->value => self::NURSERY->label(),
            self::PRIMARY->value => self::PRIMARY->label(),
            self::JUNIOR->value => self::JUNIOR->label(),
            self::SENIOR->value => self::SENIOR->label(),
        ];
    }

    function label(){
        return match($this){
            self::NURSERY => 'Nursery',
            self::PRIMARY => 'Primary',
            self::JUNIOR => 'Junior Secondary',
            self::SENIOR => 'Senior Secondary',
        };
    }

}