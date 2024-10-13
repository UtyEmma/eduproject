<?php

namespace App\Library;

use Illuminate\Support\Arr;

class AcademicYears {

    static function years($start = '2000', $end = null){
        $end ??= now()->year;
        $carry = $start;
        $years = [];

        while ($carry < $end) {
            $years[] = ++$carry;
        }

        return $years;
    }

    static function sessions($start = '2000', $end = null){
        $end ??= now()->year;
        $years = [];
        $carry = $start;

        while ($carry < $end) {
            $next = $carry + 1;
            $years[] = "{$carry}/{$next}";
            $carry++;
        }

        return $years;
    }

}