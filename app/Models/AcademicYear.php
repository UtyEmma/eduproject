<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class AcademicYear extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['year', 'title', 'starts_at', 'ends_at'];

    protected $casts = [
        'starts_at' => 'date',
        'ends_at' => 'date',
    ];

    function getIsCurrentAttribute(){
        return Date::parse(now())->between($this->starts_at, $this->ends_at);
    }
}
