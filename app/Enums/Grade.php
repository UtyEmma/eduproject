<?php

namespace App\Enums;

enum Grade:string {

    case A = 'A';
    case B = 'B';
    case C = 'C';
    case D = 'D';
    case E = 'E';
    case F = 'F';

    function label(){
        return match ($this) {
            self::A => 'Excellent',
            self::B => 'Very Good',
            self::C => 'Good',
            self::D => 'Pass',
            self::E => 'Poor',
            self::F => 'Fail',
        };
    }

}